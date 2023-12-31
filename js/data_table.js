$(document).ready(function() {
    $('#miTabla').DataTable( {    
        paging: true,
        scrollCollapse: true,
        scrollY: '250px',

        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encuentra el registro buscado - Lo lamentamos",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search":"Buscador",
            "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        },

        
     
      
        dom: 'Bfrtilp',
        buttons: [
            {
              extend: 'excelHtml5',
              text: '<i class="bi bi-file-earmark-spreadsheet"></i>',
              titleAttr: 'Exportar a Excel',
              className: 'btn custom-btn border-secondary rounded-2 text-black fw-semibold ml-2 mb-1',
            },
            {
              extend: 'pdfHtml5',
              text: '<i class="bi bi-file-earmark-pdf-fill"></i>',
              titleAttr: 'Exportar a PDF',
              className: 'btn custom-btn border-secondary rounded-2 text-black fw-semibold  ml-2 mb-1',
            },
            {
              extend: 'copy',
              text: '<i class="bi bi-clipboard-check"></i>',
              titleAttr: 'Copiar tabla',
              className: 'btn custom-btn border-secondary rounded-2 text-black fw-semibold  ml-2 mb-1',
            },
          ]
       
    } );
    
} );





