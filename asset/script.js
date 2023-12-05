const container = document.getElementById('container');
const circle = document.getElementById('circle');

container.addEventListener('mousemove', (e) => {
    const { clientX, clientY } = e;
    const { left, top, width, height } = container.getBoundingClientRect();
    
    const x = clientX - left;
    const y = clientY - top;

    const xPercent = (x / width) * 100;
    const yPercent = (y / height) * 100;

    const xOffset = (xPercent - 50) / 2;
    const yOffset = (yPercent - 50) / 2;

    circle.style.transform = `translate(-50%, -50%) translate(${xOffset}px, ${yOffset}px)`;
});
