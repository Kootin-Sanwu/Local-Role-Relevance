document.addEventListener('DOMContentLoaded', function() {
    // Set up the job card
    const card = document.querySelector('.job-card');
    
    // Calculate and set the initial auto height
    setTimeout(() => {
        adjustCardHeight(false);
    }, 100);

    document.getElementById('add-job').addEventListener('click', function() {
        let container = document.querySelector('.job-card-inputs');
        let nextIndex = container.querySelectorAll('.job-entry').length + 1;

        // Limit to 10 job roles
        if (nextIndex > 10) {
            alert('You can only add up to 10 job roles.');
            return;
        }

        // Before adding, get the current height for reference
        const initialHeight = getContentHeight();
        
        // Create new job entry
        let jobEntry = document.createElement('div');
        jobEntry.classList.add('job-entry');
        jobEntry.classList.add('adding'); // Add class for animation

        const minusIconSvg = `
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" 
                viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="2" 
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
        `;

        jobEntry.innerHTML = `
            <input type="text" id="job-title-${nextIndex}" name="job_title[]" required>
            <button type="button" class="remove-button">
                ${minusIconSvg}
            </button>
        `;

        // Set the height explicitly before adding new content
        setCardHeightExplicitly(initialHeight);
        
        // Then add the new element
        container.appendChild(jobEntry);

        // This wasn't there initially
        // Add some extra padding for the submit button
        const newHeight = card.scrollHeight + 36;
        card.style.height = `${newHeight}px`;
        
        // This wasn't there initially
        // Add listener for the remove button on the new job entry
        jobEntry.querySelector('.remove-button').addEventListener('click', function() {
            removeJobEntry(jobEntry);
        });
        
        // jobEntry.classList.remove('adding');

        // // Then animate to the new height
        // setTimeout(() => {
        //     // Add some extra padding for the submit button
        //     const newHeight = card.scrollHeight + 70;
        //     card.style.height = `${newHeight}px`;
            
        //     // Remove animation class after transition completes
        //     setTimeout(() => {
        //         jobEntry.classList.remove('adding');
        //     }, 800);
        // }, 10);

        // // Add listener for the remove button on the new job entry
        // jobEntry.querySelector('.remove-button').addEventListener('click', function() {
        //     removeJobEntry(jobEntry);
        // });
    });

    // Set up remove listeners for any existing job entries
    document.querySelectorAll('.remove-button').forEach(button => {
        button.addEventListener('click', function() {
            const jobEntry = this.closest('.job-entry');
            removeJobEntry(jobEntry);
        });
    });

    // Function to remove a job entry with animation
    function removeJobEntry(jobEntry) {
        // Get the card and set its current height explicitly
        const card = document.querySelector('.job-card');
        const initialHeight = card.offsetHeight;
        card.style.height = `${initialHeight}px`;
        
        // Force reflow
        card.offsetHeight;
        
        // // Add the removing class to trigger the animation
        // jobEntry.classList.add('removing');

        // This wasn't there initially
        // Calculate the new height by subtracting this element's height
        const entryHeight = jobEntry.offsetHeight;
        const newHeight = Math.max(initialHeight - entryHeight, card.scrollHeight - entryHeight);

        // This wasn't there initially
        // Animate to the new height
        card.style.height = `${newHeight - 18}px`;

        // // This wasn't there initially
        // if (jobEntry.parentNode) {
        //     jobEntry.parentNode.removeChild(jobEntry);
        // }

        // if (jobEntry.parentNode) {
        //   // Add a CSS class that triggers the animation
        //   jobEntry.classList.add('fade-out');
          
        //   // Wait for the animation to complete before removing
        //   jobEntry.addEventListener('transitionend', function() {
        //     if (jobEntry.parentNode) {
        //       jobEntry.parentNode.removeChild(jobEntry);
        //     }
        //   });
        // }

        jobEntry.classList.add('removing');

        jobEntry.addEventListener('transitionend', function handleTransitionEnd(e) {
            if (e.propertyName === 'max-height') {
                jobEntry.removeEventListener('transitionend', handleTransitionEnd);
                if (jobEntry.parentNode) {
                    jobEntry.parentNode.removeChild(jobEntry);
                }
        
                // Smoothly shrink the card again to fit new content
                const newHeight = card.scrollHeight + 20;
                card.style.height = `${newHeight - 19}px`;
            }
        });        
        
    //     // Allow time for CSS transition to start
    //     setTimeout(() => {
    //         // Calculate the new height by subtracting this element's height
    //         const entryHeight = jobEntry.offsetHeight;
    //         const newHeight = Math.max(initialHeight - entryHeight, card.scrollHeight - entryHeight);
            
    //         // Animate to the new height
    //         card.style.height = `${newHeight - 10}px`;
            
    //         // Wait for the animation to finish before removing the element
    //         setTimeout(() => {
    //             if (jobEntry.parentNode) {
    //                 jobEntry.parentNode.removeChild(jobEntry);
    //             }
    //         }, 810);
    //     }, 10);
    }

    // Function to get the content height
    function getContentHeight() {
        const card = document.querySelector('.job-card');
        return card.scrollHeight;
    }
    
    // Function to set the card height explicitly
    function setCardHeightExplicitly(height) {
        const card = document.querySelector('.job-card');
        card.style.height = `${height}px`;
        // Force reflow
        card.offsetHeight;
    }

    // // Function to adjust the job card height
    // function adjustCardHeight(animate) {
    //     const card = document.querySelector('.job-card');
    //     // Add padding for the submit button
    //     const newHeight = card.scrollHeight + 20;
        
    //     if (animate) {
    //         card.style.height = `${newHeight}px`;
    //     } else {
    //         card.style.height = `${newHeight}px`;
    //     }
    // }
});