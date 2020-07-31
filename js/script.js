const appointment_btn = document.querySelector('.appointment-btn');
const appointment_widget = document.querySelector('.appointment-widget');
const contact_info = document.querySelector('.contact-info');
const my_tab = document.querySelector('#my-tab');

const expand = () => {
    appointment_widget.classList.toggle("open");
    document.body.style.overflow = "hidden";
    appointment_btn.style.visibility = "hidden";
}
const exit = () => {

    appointment_widget.classList.toggle("open");
    document.body.style.overflow = "auto";
    appointment_btn.style.visibility = 'visible';

}

appointment_btn.addEventListener('click', expand);
appointment_widget.addEventListener('click', exit);

contact_info.addEventListener('mouseover', () => {
    appointment_widget.removeEventListener('click', exit);
})
contact_info.addEventListener('mouseout', () => {
    appointment_widget.addEventListener('click', exit);
})







