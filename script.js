function fetchData() {
    const apiUrl = 'https://api.worldbank.org/v2/country';
    fetch(`${apiUrl}?format=json&per_page=296`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const tableBody = document.querySelector('#data-table');
            tableBody.innerHTML = '';
            if (data[1]) {
                data[1].forEach(country => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td class="border px-4 py-2">${country.id}</td>
                        <td class="border px-4 py-2">${country.name}</td>
                        <td class="border px-4 py-2">${country.region.value}</td>
                        <td class="border px-4 py-2">${country.capitalCity}</td>
                        <td class="border px-4 py-2">${country.incomeLevel.value}</td>
                    `;
                    tableBody.appendChild(row);
                });
            } else {
                console.error('Error: Invalid response data');
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

window.onload = fetchData;