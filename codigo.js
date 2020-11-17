
// Funciones
$(document).ready(function() {
  // Global Settings
  let edit = false;
  // Testing Jquery
  console.log('jquery is working!');
  fetchTasks();
 
  $('#task-result').hide();
  $('#task-form').submit(e => {
    e.preventDefault();
    const postData = {
      clicencia: $('#clicencia').val(),
      csoat: $('#csoat').val(),
      crtm: $('#crtm').val(),
      crc: $('#crc').val(),
      o_documentos: $('#o_documentos').val(),
      cdelanteras: $('#cdelanteras').val(),
      ctraseras: $('#ctraseras').val(),
      o_direccionales: $('#o_direccionales').val(),
      caltass: $('#caltass').val(),
      cbajass: $('#cbajass').val(),
      cstop: $('#cstop').val(),
      creversa: $('#creversa').val(),
      cparqueo: $('#cparqueo').val(),
      o_luces: $('#o_luces').val(),
      cdia: $('#cdia').val(),
      o_limpiabrisas: $('#o_limpiabrisas').val(),
      cprincipal: $('#cprincipal').val(),
      cemergencia: $('#cemergencia').val(),
      o_frenos: $('#o_frenos').val(),
      cddelanteras: $('#cddelanteras').val(),
      cttraseras: $('#cttraseras').val(),
      crepuesto: $('#crepuesto').val(),
      o_llantas: $('#o_llantas').val(),
      cderecho: $('#cderecho').val(),
      cizquierdo: $('#cizquierdo').val(),
      cretrovisor: $('#cretrovisor').val(),
      o_espejos: $('#o_espejos').val(),
      cbocina: $('#cbocina').val(),
      o_bocina: $('#o_bocina').val(),
      cfrenos: $('#cfrenos').val(),
      caceite: $('#caceite').val(),
      crefrigerante: $('#crefrigerante').val(),
      o_nf: $('#o_nf').val(),
      cdelan: $('#cdelan').val(),
      ctras: $('#ctras').val(),
      o_apoya: $('#o_apoya').val(),
      ccinturones: $('#ccinturones').val(),
      o_cs: $('#o_cs').val(),
      ca: $('#ca').val(),
      sincronizacion: $('#sincronizacion').val(),
      ab: $('#ab').val(),
      cll: $('#cll').val(),
      o_fm: $('#o_fm').val(),
      rtmecanica: $('#rtmecanica').val(),
      casoat: $('#casoat').val(),
      o_fv: $('#o_fv').val(),
      fv: $('#fv').val(),
      ecapacidad: $('#ecapacidad').val(),
      o_ext: $('#o_ext').val(),
      calicates: $('#calicates').val(),
      cdestorni: $('#cdestorni').val(),
      cle: $('#cle').val(),
      clf: $('#clf').val(),
      o_herr: $('#o_herr').val(),
      ccruceta: $('#ccruceta').val(),
      o_cru: $('#o_cru').val(),
      cgh: $('#cgh').val(),
      o_gh: $('#o_gh').val(),
      ctaco: $('#ctaco').val(),
      o_taco: $('#o_taco').val(),
      csenal: $('#csenal').val(),
      o_senal: $('#o_senal').val(),
      cchaleco: $('#cchaleco').val(),
      o_cr: $('#o_cr').val(),
      cbotiquin: $('#cbotiquin').val(),
      o_boti: $('#o_boti').val(),
      o_general: $('#o_general').val(),
      id: $('#taskId').val()
    };
    const url = edit === false ? 'task-add.php' : 'task-edit.php' ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#task-form').trigger('reset');
      fetchTasks();
    
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
                  ${task.clicencia}
                  </td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.csoat} 
                  </a>
                  </td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.crtm} 
                  </a>
                  </td>
                  <td>${task.crc}</td>
                  <td  >
                  ${task.cdelanteras}
                  </td>
                  <td  >
                  ${task.ctraseras}
                  </td>
                  <td  >
                  ${task.caltass}
                  </td>
                  <td   >
                  ${task.cbajass}
                  </td>
                  <td >
                  ${task.cstop}
                  </td>
                  <td >
                  ${task.creversa}
                  </td>
                  <td  >
                  ${task.cparqueo}
                  </td>
                  <td  >
                  ${task.cdia}
                  </td>
                  <td  >
                  ${task.cprincipal}
                  </td>
                  <td  >
                  ${task.cemergencia}
                  </td>
                  <td  >
                  ${task.cddelanteras}
                  </td>
                  <td  >
                  ${task.cttraseras}
                  </td>
                  <td  >
                  ${task.crepuesto}
                  </td>
                  <td  >
                  ${task.cderecho}
                  </td>
                  <td  >
                  ${task.cizquierdo}
                  </td>
                  <td  >
                  ${task.cretrovisor}
                  </td>
                  <td  >
                  ${task.cbocina}
                  </td>
                  <td  >
                  ${task.cfrenos}
                  </td>
                  <td  >
                  ${task.caceite}
                  </td>
                  <td  >
                  ${task.crefrigerante}
                  </td>
                  <td  >
                  ${task.cdelan}
                  </td>
                  <td  >
                  ${task.ctras}
                  </td>
                  <td  >
                  ${task.ccinturones}
                  </td>
                  <td  >
                  ${task.ca}
                  </td>
                  <td  >
                  ${task.sincronizacion}
                  </td>
                  <td  >
                  ${task.ab}
                  </td>
                  <td  >
                  ${task.cll}
                  </td>
                  <td  >
                  ${task.rtmecanica}
                  </td>
                  <td  >
                  ${task.casoat}
                  </td>
                  <td  >
                  ${task.fv}
                  </td>
                  <td  >
                  ${task.ecapacidad}
                  </td>
                  <td  >
                  ${task.calicates}
                  </td>
                  <td  >
                  ${task.cdestorni}
                  </td>
                  <td  >
                  ${task.cle}
                  </td>
                  <td  >
                  ${task.clf}
                  </td>
                  <td  >
                  ${task.ccruceta}
                  </td>
                  <td  >
                  ${task.cgh}
                  </td>
                  <td  >
                  ${task.ctaco}
                  </td>
                  <td  >
                  ${task.csenal}
                  </td>
                  <td  >
                  ${task.cchaleco}
                  </td>
                  <td  >
                  ${task.cbotiquin}
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
      $('#clicencia').val(task.clicencia);
      $('#csoat').val(task.csoat);
      $('#crtm').val(task.crtm);
      $('#crc').val(task.crc);
      $('#cdelanteras').val(task.cdelanteras);
      $('#ctraseras').val(task.ctraseras);
      $('#caltass').val(task.caltass);
      $('#cbajass').val(task.cbajass);
      $('#cstop').val(task.cstop);
      $('#creversa').val(task.creversa);
      $('#cparqueo').val(task.cparqueo);
      $('#cdia').val(task.cdia);
      $('#cprincipal').val(task.cprincipal);
      $('#cemergencia').val(task.cemergencia);
      $('#cddelanteras').val(task.cddelanteras);
      $('#cttraseras').val(task.cttraseras);
      $('#crepuesto').val(task.crepuesto);
      $('#cderecho').val(task.cderecho);
      $('#cizquierdo').val(task.cizquierdo);
      $('#cretrovisor').val(task.cretrovisor);
      $('#cbocina').val(task.cbocina);
      $('#cfrenos').val(task.cfrenos);
      $('#caceite').val(task.caceite);
      $('#crefrigerante').val(task.crefrigerante);
      $('#cdelan').val(task.cdelan);
      $('#ctras').val(task.ctras);
      $('#ccinturones').val(task.ccinturones);
      $('#ca').val(task.ca);
      $('#sincronizacion').val(task.sincronizacion);
      $('#ab').val(task.ab);
      $('#cll').val(task.cll);
      $('#rtmecanica').val(task.rtmecanica);
      $('#casoat').val(task.casoat);
      $('#fv').val(task.fv);
      $('#ecapacidad').val(task.ecapacidad);
      $('#calicates').val(task.calicates);
      $('#cdestorni').val(task.cdestorni);
      $('#cle').val(task.cle);
      $('#clf').val(task.clf);
      $('#ccruceta').val(task.ccruceta);
      $('#cgh').val(task.cgh);
      $('#ctaco').val(task.ctaco);
      $('#csenal').val(task.csenal);
      $('#cchaleco').val(task.cchaleco);
      $('#cbotiquin').val(task.cbotiquin);
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

   
 // Fin del Código
});