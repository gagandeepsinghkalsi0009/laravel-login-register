
 <footer class="footer-custom d-flex align-items-center justify-content-between px-4"> <h2 class="m-0 fs-5">© 2025 All Rights Reserved</h2> <p id="footerpara">Designed & Developed by Gagandeep</p> </footer>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
$(document).ready(function(){
    $('#mytable').DataTable({
        responsive: true,
        paging:false,
    });
});
</script>

 <script>
const quill = new Quill('#editor', {
  theme: 'snow',
  placeholder: 'Enter Your Page Content Here !!',
  modules: {
    toolbar: [
      ['bold', 'italic', 'underline'],
      ['image','video'],
      [{ list: 'ordered' }, { list: 'bullet' }],
      [{ header: [1,2,3,4,5,6,false] }],
      ['clean']
    ]
  }
});

document.querySelector('form').addEventListener('submit', function () {
  document.getElementById('content').value = quill.root.innerHTML;
});
</script>
