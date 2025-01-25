const totalPages = 6; // Замените на общее количество страниц
const currentPage = 1; // Замените на текущую страницу

const paginationContainer = document.getElementById('pagination');

function createPagination(totalPages, currentPage) {
    let paginationHTML = '';

    // Кнопка "Назад"
    if (currentPage > 1) {
        paginationHTML += `<a href="?page=${currentPage - 1}">&lt;</a>`;
    }

    // Номера страниц
    const visiblePages = 4; // Количество отображаемых номеров страниц
    const startPage = Math.max(1, currentPage - Math.floor(visiblePages / 2));
    const endPage = Math.min(totalPages, startPage + visiblePages - 1);

    for (let i = startPage; i <= endPage; i++) {
        paginationHTML += `<a href="?page=${i}" class="${i === currentPage ? 'active' : ''}">${i}</a>`;
    }

    // Кнопка "Вперед"
    if (currentPage < totalPages) {
        paginationHTML += `<a href="?page=${currentPage + 1}">&gt;</a>`;
    }

    paginationContainer.innerHTML = paginationHTML;
}

createPagination(totalPages, currentPage);


//Обработка ссылок (необходима для корректной работы, простая реализация, для полноценного сайта понадобится более сложная обработка)
const links = document.querySelectorAll('.pagination a');
links.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        const newPage = parseInt(this.href.split('page=')[1]);
        createPagination(totalPages, newPage);
    });
});

