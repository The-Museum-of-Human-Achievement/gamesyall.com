// Function to create masonry layout
function initMasonryGallery() {
  const gallery = document.querySelector('.gallery-masonry');
  if (!gallery) return;
  
  const items = gallery.querySelectorAll('.gallery-item');
  if (!items.length) return;
  
  // Wait for all images to load
  let loadedImages = 0;
  const totalImages = items.length;
  
  items.forEach(item => {
    const img = item.querySelector('img');
    if (img.complete) {
      handleImageLoaded();
    } else {
      img.addEventListener('load', handleImageLoaded);
      img.addEventListener('error', handleImageLoaded); // Handle error case
    }
  });
  
  function handleImageLoaded() {
    loadedImages++;
    if (loadedImages === totalImages) {
      // All images loaded, now arrange the grid
      arrangeGallery();
      
      // Also rearrange on window resize
      window.addEventListener('resize', debounce(arrangeGallery, 200));
    }
  }
  
  function arrangeGallery() {
    const columnWidth = parseInt(getComputedStyle(items[0]).width);
    const rowGap = 15; // Same as grid-gap in CSS
    
    items.forEach(item => {
      const img = item.querySelector('img');
      const height = img.offsetHeight;
      
      // Set the row span based on image height
      const rowSpan = Math.ceil((height + rowGap) / (rowGap));
      item.style.gridRowEnd = `span ${rowSpan}`;
    });
  }
  
  // Debounce function to limit how often a function can fire
  function debounce(func, wait) {
    let timeout;
    return function() {
      const context = this;
      const args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        func.apply(context, args);
      }, wait);
    };
  }
}

// Initialize when DOM is fully loaded
document.addEventListener('DOMContentLoaded', initMasonryGallery);

// Home page event carousel - auto-rotating images
function initEventCarousel() {
    const carousel = document.querySelector('.event-carousel');
    if (!carousel) return;

    const images = carousel.querySelectorAll('.carousel-image');
    if (images.length <= 1) return;

    let currentIndex = 0;
    const intervalTime = 4000; // 4 seconds per image

    function showNextImage() {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
    }

    setInterval(showNextImage, intervalTime);
}

document.addEventListener('DOMContentLoaded', initEventCarousel);

// Add lightbox functionality if desired
function initLightbox() {
  const galleryLinks = document.querySelectorAll('.gallery-link');
  
  galleryLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      // You can implement a lightbox here or use an existing library
      // This is a basic placeholder for future implementation
      e.preventDefault();
      const imgSrc = this.href;
      console.log('Open lightbox with image:', imgSrc);
      
      // Example:
      // openLightbox(imgSrc);
    });
  });
}

// Uncomment if you decide to implement a lightbox:
// document.addEventListener('DOMContentLoaded', initLightbox);