document.addEventListener('DOMContentLoaded', () => {
    // Check if the showcase player exists on the page
    if (document.querySelector('.thumbnail-gallery')) {
      // Initialize Swiper for the thumbnail gallery
      const thumbnailSwiper = new Swiper('.thumbnail-gallery', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        watchSlidesProgress: true,
      });

      // Get player elements
      const mainPlayer = document.getElementById('showcase_player');
      const mainImage = document.getElementById('showcase_image');
      const thumbnailItems = document.querySelectorAll('.thumbnail-item');

      // Function to update the main display
      const updateDisplay = (thumb) => {
        if (!thumb) return;

        // Update active state on thumbnail
        document.querySelector('.thumbnail-item.active')?.classList.remove('active');
        thumb.classList.add('active');

        const type = thumb.dataset.type;
        const src = thumb.dataset.src;

        // Hide everything first
        mainPlayer.style.display = 'none';
        mainImage.style.display = 'none';

        if (type === 'youtube') {
          mainPlayer.src = src;
          mainPlayer.style.display = 'block';
          // Stop image from loading just in case
          mainImage.src = '';
        } else { // type is 'image'
          mainImage.src = src;
          mainImage.style.display = 'block';
          // Stop video from playing in the background
          mainPlayer.src = '';
        }
      };

      // Add click listeners to thumbnails
      thumbnailItems.forEach(thumb => {
        thumb.addEventListener('click', () => updateDisplay(thumb));
      });

      // Set the initial state on page load
      updateDisplay(document.querySelector('.thumbnail-item.active'));
    }
  });