import './bootstrap';
import 'quill/dist/quill.snow.css';
import Quill from 'quill';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
  const editor = new Quill('#quill-editor', { theme: 'snow' });
  const textarea = document.getElementById('quill-editor-area');

  if (textarea.value.trim()) {
    editor.clipboard.dangerouslyPasteHTML(textarea.value);
  }

  editor.on('text-change', () => {
    textarea.value = editor.root.innerHTML;
  });
});
