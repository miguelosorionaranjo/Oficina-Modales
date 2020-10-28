
    // Revision General

    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var recipient = button.data('whatever') 
      var modal = $(this)
      modal.find('.modal-title').text('Documentos ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })

    $('#exampleModal2').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
    
      $('#exampleModal3').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal4').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal5').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal6').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal7').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal8').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal9').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      }) 
      $('#exampleModal11').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal12').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal13').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      $('#exampleModal14').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 
        var modal = $(this)
        modal.find('.modal-title').text('Documentos ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
  
// Sistema de Seguridad

$('#exampleModal20').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Herramientas

$('#exampleModal21').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Crucetas

$('#exampleModal22').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Gato Hidráulico

$('#exampleModal23').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Taco

$('#exampleModal24').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Señales

$('#exampleModal25').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Chaleco Reflectivo

$('#exampleModal26').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// Botiquín

$('#exampleModal27').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('Documentos ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

// Funciones
$(document).ready(function() {
  // Global Settings
  let edit = false;
  // Testing Jquery
  console.log('jquery is working!');
  fetchTasks();
  fetchAprobado();
  $('#task-result').hide();
  $('#task-form').submit(e => {
    e.preventDefault();
    const postData = {
      clicencia: $('#clicencia').val(),
      csoat: $('#csoat').val(),
      crtm: $('#crtm').val(),
      crc: $('#crc').val(),
      cdelanteras: $('#cdelanteras').val(),
      ctraseras: $('#ctraseras').val(),
      caltass: $('#caltass').val(),
      cbajass: $('#cbajass').val(),
      cstop: $('#cstop').val(),
      creversa: $('#creversa').val(),
      cparqueo: $('#cparqueo').val(),
      cdia: $('#cdia').val(),
      cprincipal: $('#cprincipal').val(),
      cemergencia: $('#cemergencia').val(),
      cddelanteras: $('#cddelanteras').val(),
      cttraseras: $('#cttraseras').val(),
      crepuesto: $('#crepuesto').val(),
      cderecho: $('#cderecho').val(),
      cizquierdo: $('#cizquierdo').val(),
      cretrovisor: $('#cretrovisor').val(),
      cbocina: $('#cbocina').val(),
      cfrenos: $('#cfrenos').val(),
      caceite: $('#caceite').val(),
      crefrigerante: $('#crefrigerante').val(),
      cdelan: $('#cdelan').val(),
      ctras: $('#ctras').val(),
      ccinturores: $('#ccinturones').val(),
      ca: $('#ca').val(),
      sincronizacion: $('#sincronizacion').val(),
      ab: $('#ab').val(),
      cll: $('#cll').val(),
      rtmecanica: $('#rtmecanica').val(),
      casoat: $('#casoat').val(),
      fv: $('#fv').val(),
      ecapacidad: $('#ecapacidad').val(),
      calicates: $('#calicates').val(),
      cdestorni: $('#cdestorni').val(),
      cle: $('#cle').val(),
      clf: $('#clf').val(),
      ccruceta: $('#ccruceta').val(),
      cgh: $('#cgh').val(),
      ctaco: $('#ctaco').val(),
      csenal: $('#csenal').val(),
      cchaleco: $('#cchaleco').val(),
      cbotiquin: $('#cbotiquin').val(),
      id: $('#taskId').val()
    };
    const url = edit === false ? 'task-add.php' : 'task-edit.php' ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#task-form').trigger('reset');
      fetchTasks();
      fetchAprobado();
    });
  });
  // Fetching Tasks
  function fetchTasks() {
    $.ajax({
      url: 'tasks-list.php',
      type: 'GET',
      success: function(response) {
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.id}">
                  <td>${task.id}</td>
                  <td  >
                  ${task.fuec}
                  </td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.name} 
                  </a>
                  </td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.apellido} 
                  </a>
                  </td>
                  <td>${task.description}</td>
                  <td  >
                  ${task.contratante}
                  </td>
                  <td  >
                  ${task.objetocontrato}
                  </td>
                  <td  >
                  ${task.cc}
                  </td>
                  <td   >
                  ${task.origen}
                  </td>
                  <td >
                  ${task.recorrido}
                  </td>
                  <td >
                  ${task.fecha}
                  </td>
                  <td>
                    <button class="task-activa btn btn-success-activa ">
                    ${task.activa}
                    </button>
                  </td>
                  <td>
                    <button class="task-delete btn btn-danger">
                     Eliminar 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#tasks').html(template);
      }
    });
  }
  // Get a Single Task by Id 
  $(document).on('click', '.task-item', (e) => {
    const element = $(this)[0].activeElement.parentElement.parentElement;
    const id = $(element).attr('taskId');
    $.post('task-single.php', {id}, (response) => {
      const task = JSON.parse(response);
      $('#fuec').val(task.fuec);
      $('#name').val(task.name);
      $('#apellido').val(task.apellido);
      $('#description').val(task.description);
      $('#contratante').val(task.contratante);
      $('#objetocontrato').val(task.objetocontrato);
      $('#cc').val(task.cc);
      $('#origen').val(task.origen);
      $('#recorrido').val(task.recorrido);
      $('#taskId').val(task.id);
      edit = true;
    });
    e.preventDefault();
  });
  // Delete a Single Task
  $(document).on('click', '.task-delete', (e) => {
    if(confirm('¿Estás seguro de que quieres eliminarlo?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      $.post('task-delete.php', {id}, (response) => {
        fetchTasks();
      });
    }
  });

  $(document).on('click', '.task-activa', (e) => {
    if(confirm('¿Estás seguro de que quieres activarlo?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      $.post('task-activa.php', {id}, (response) => {
        fetchTasks();
      });
    }
  });
  // Consulta de Aprobados
  function fetchAprobado() {
   $.ajax({
     url: 'task-aprobado.php',
     type: 'GET',
     success: function(response) {
       const aprobado = JSON.parse(response);
       let template = '';
       aprobado.forEach(task => {
         template += `
                 <tr taskId="${task.id}">
                 <td>${task.id}</td>
                 <td  >
                 ${task.fuec}
                 </td>
                 <td>
                 <a href="#" class="task-item">
                   ${task.name} 
                 </a>
                 </td>
                 <td>
                 <a href="#" class="task-item">
                   ${task.apellido} 
                 </a>
                 </td>
                 <td>${task.description}</td>
                 <td  >
                 ${task.contratante}
                 </td>
                 <td  >
                 ${task.objetocontrato}
                 </td>
                 <td  >
                 ${task.cc}
                 </td>
                 <td   >
                 ${task.origen}
                 </td>
                 <td >
                 ${task.recorrido}
                 </td>
                 <td >
                  ${task.fecha}
                  </td>
                 <td>
                   <button class="task-activa btn btn-success-activa ">
                   ${task.activa}
                   </button>
                 </td>
                 <td>
                   <button class="task-delete btn btn-danger">
                    Eliminar 
                   </button>
                 </td>
                 </tr>
               `
       });
       $('#aprobado').html(template);
     }
   });
 }
 // Fin del Código
});