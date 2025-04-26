$(function() {
    feather.replace();
    
    AOS.init({
        disable: 'mobile',
        duration: 600,
        once: true,
    });

    const modalElement = document.getElementById('modal-whatsapp');
    const modalInstance = bootstrap.Modal.getInstance(modalElement) || new bootstrap.Modal(modalElement);

    $('#whatsapp-form').on('afterValidate', function(event, messages, errorAttributes) {
        if(!errorAttributes.length > 0)
            modalInstance.hide();
    })

    $('#modal-whatsapp').on('show.bs.modal', () => {
        $('#whatsapp-form')[0].reset();
    });



    setTimeout(() => {
        const elfsight = 'elfsight-app-ec3e8069-396f-4293-9865-f2266583112f';
        $(document).find(`.${elfsight} a:last`).remove();

        $(document).find(`.${elfsight} .eapps-instagram-feed-posts-grid-load-more-container`).remove();

        $(`.${elfsight}`).find('.eapps-instagram-feed-title').text('Siguenos en Instagram');
        
    }, 1000)
})