const triggers = document.querySelectorAll('[role="tab"]');
const contents = document.querySelectorAll('.tabs-content');

triggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
        const targetId = trigger.id.replace('trigger-', 'content-');

        // Remove active class from all triggers and contents
        triggers.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        // Add active class to current trigger and content
        trigger.classList.add('active');
        document.getElementById(targetId).classList.add('active');
    });
});