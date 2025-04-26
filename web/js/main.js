$(function () {
  feather.replace();
  AOS.init({
    disable: 'mobile',
    duration: 600,
    once: true
  });
  const modalElement = document.getElementById('modal-whatsapp');
  const modalInstance = bootstrap.Modal.getInstance(modalElement) || new bootstrap.Modal(modalElement);
  $('#whatsapp-form').on('afterValidate', function (event, messages, errorAttributes) {
    if (!errorAttributes.length > 0) modalInstance.hide();
  });
  $('#modal-whatsapp').on('show.bs.modal', () => {
    $('#whatsapp-form')[0].reset();
  });
});