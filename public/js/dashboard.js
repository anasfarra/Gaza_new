function openRequestModal(id) {
            // In a real app, you would fetch details for 'id' here
            const modal = document.getElementById('requestModal');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
            modal.classList.remove('hidden');
        }

        function closeRequestModal() {
            const modal = document.getElementById('requestModal');
            document.body.style.overflow = ''; // Restore scrolling
            modal.classList.add('hidden');
        }

        // Close on Escape key
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeRequestModal();
            }
        });