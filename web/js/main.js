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
  setTimeout(() => {
    $(document).find(`.eapps-instagram-feed a:last`).remove();
    $(document).find(`.eapps-instagram-feed .eapps-instagram-feed-posts-grid-load-more-container`).remove();
    $(`.eapps-instagram-feed`).find('.eapps-instagram-feed-title').text('Siguenos en Instagram');
  }, 1100);
});