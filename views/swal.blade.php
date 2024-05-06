<button id="swal">
</button>
<script defer>
    const enlace = document.querySelector('#swal')
    enlace.addEventListener('click', () => {
        Swal.fire({
            title: '{{ $title }}',
            text: '{{ $text }}',
            icon: '{{ $icon }}',
            showConfirmButton: false,
            timer: 1500
        });
    });
    enlace.click();
    enlace.remove();
</script>
{{--
    ¡We are sorry!
    This room is not available for the dates you need. Please try different dates or try a different room.
    The Miranda Hotel
--}}

{{--
    ¡Thank you for your request!
    We have received it correctly. Someone from our Team will get back to you very soon.
    The Miranda Hotel
    --}}