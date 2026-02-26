// filepath: js/donate.js
document.addEventListener('DOMContentLoaded', function () {
    const donationForm = document.getElementById('donationForm');
    if (donationForm) {
        donationForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form values (basic check)
            const inputAmount = document.querySelector('input[type="number"]');
            const predefinedAmount = document.querySelector('.bg-emerald-50.border-emerald-600');
            const amount = inputAmount && inputAmount.value ? '$' + inputAmount.value : (predefinedAmount ? predefinedAmount.textContent : '$50');

            const project = document.querySelector('select').value;

            Swal.fire({
                title: 'شكرًا لتبرعك!',
                text: `تم استلام مساهمتك بنجاح لصالح ${project}.`,
                icon: 'success',
                confirmButtonText: 'العودة للرئيسية',
                confirmButtonColor: '#059669',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.html';
                }
            });
        });
    }

    // Add amount selector logic with animation
    const amountButtons = document.querySelectorAll('.amount-btn');
    amountButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            // Remove active styles and checkmark from all
            amountButtons.forEach(b => {
                b.classList.remove('active', 'border-emerald-500', 'bg-gradient-to-br', 'from-emerald-50/90', 'to-teal-50/90', 'shadow-lg', 'border-2');
                b.classList.add('border', 'border-slate-200/60', 'bg-white/60');
                const checkmark = b.querySelector('svg');
                if (checkmark) checkmark.remove();
                const priceSpan = b.querySelector('span:first-child');
                const labelSpan = b.querySelector('span:last-child');
                if (priceSpan) priceSpan.classList.remove('text-emerald-700');
                if (priceSpan) priceSpan.classList.add('text-slate-700');
                if (labelSpan) labelSpan.classList.remove('text-emerald-600');
                if (labelSpan) labelSpan.classList.add('text-slate-500');
            });

            // Add active styles to clicked
            this.classList.remove('border', 'border-slate-200/60', 'bg-white/60');
            this.classList.add('active', 'border-2', 'border-emerald-500', 'bg-gradient-to-br', 'from-emerald-50/90', 'to-teal-50/90', 'shadow-lg');
            const priceSpan = this.querySelector('span:first-child');
            const labelSpan = this.querySelector('span:last-child');
            if (priceSpan) {
                priceSpan.classList.remove('text-slate-700');
                priceSpan.classList.add('text-emerald-700');
            }
            if (labelSpan) {
                labelSpan.classList.remove('text-slate-500');
                labelSpan.classList.add('text-emerald-600');
            }

            // Add checkmark icon
            if (!this.querySelector('svg')) {
                const checkmark = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                checkmark.setAttribute('class', 'absolute top-2 left-2 w-5 h-5 text-emerald-600');
                checkmark.setAttribute('fill', 'currentColor');
                checkmark.setAttribute('viewBox', '0 0 20 20');
                checkmark.innerHTML = '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>';
                this.appendChild(checkmark);
            }
        });
    });
});
