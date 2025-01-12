// Fetch blogs from the PHP backend
async function fetchBlogs() {
    try {
        const response = await fetch('http://localhost:8080/project/data.php'); // Endpoint for dynamic data
        const blogs = await response.json();

        // Select the blogs container
        const blogsContainer = document.getElementById('blogs');
        

        // Populate the blogs dynamically
        blogs.forEach(blog => {
            const blogCard = document.createElement('div');
            blogCard.classList.add('blog-card');
            blogCard.innerHTML = `
                <h3>${blog.title}</h3>
                <p>${blog.description}</p>
            `;
            blogsContainer.appendChild(blogCard);

        });

    } catch (error) {
        console.error('Error fetching blogs:', error);
    }
}

// Call fetchBlogs on page load
document.addEventListener('DOMContentLoaded', fetchBlogs);


