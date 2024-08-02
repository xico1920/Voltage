document.addEventListener('DOMContentLoaded', () => {
    fetch('fetch_data.php')
        .then(response => response.json())
        .then(data => {
            const contentContainer = document.getElementById('content-container');

            data.forEach(item => {
                const contentItem = document.createElement('div');
                contentItem.className = 'content-item';

                const img = document.createElement('img');
                img.src = item.image_url;
                img.alt = item.title;

                const title = document.createElement('h2');
                title.textContent = item.title;

                const description = document.createElement('p');
                description.textContent = item.description;

                contentItem.appendChild(img);
                contentItem.appendChild(title);
                contentItem.appendChild(description);

                contentContainer.appendChild(contentItem);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});