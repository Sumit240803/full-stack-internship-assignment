async function fetchBlogs() {
    try {
        const response = await fetch('http://localhost:8080/data.php'); // Endpoint for dynamic data
        const blogs = await response.json();

        const blogsContainer = document.getElementById('blogs');

        blogs.forEach(blog => {
            const blogCard = document.createElement('div');
            blogCard.classList.add('blog-card');
            blogCard.innerHTML = `
                <img src="${blog.image}" alt="${blog.title}" class="blog-image">
                <h3>${blog.title}</h3>
                <p>${blog.description}</p>
            `;
            blogsContainer.appendChild(blogCard);
        });
    } catch (error) {
        console.error('Error fetching blogs:', error);
    }
}
document.addEventListener('DOMContentLoaded', fetchBlogs);