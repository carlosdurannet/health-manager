import Quill from 'quill';

export const loadQuill = () => {
    const quillElement = document.getElementById('quill-editor');

    if (quillElement) {
        const quill = new Quill(quillElement, {
            theme: 'snow',
            placeholder: 'Escribe aquí la descripción...',
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    ['link', 'code-block'],
                ],
            },
        });

        // Sincronizar el contenido de Quill con un input oculto
        const hiddenInput = document.querySelector('#description');
        quill.on('text-change', () => {
            hiddenInput.value = quill.root.innerHTML;
        });
    }
};
