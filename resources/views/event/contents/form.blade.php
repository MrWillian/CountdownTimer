<div class="content">
  <form action="" method="POST">
    <h3 class="title text-center">Evento</h3>
    <div class="input-group">
      <label class="col-sm-2 control-label label" for="name">Nome</label>
      <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control input-lg" aria-describedby="helpBlockName" />
        <span id="helpBlockName" class="help-block">Informe o nome do evento.</span>
      </div>
    </div>

    <div class="input-group">
      <label class="col-sm-2 control-label label" for="data">Data</label>
      <div class="col-sm-10">
        <input type="text" name="data" id="data" placeholder="__/__/____" class="form-control" />
        <input type="text" name="time" id="time" placeholder="00:00:00" class="form-control" />
        <span id="helpBlockData" class="help-block">Informe o dia seguido do horário do evento.</span>
      </div>
    </div>

    <button id="start" type="submit" class="btn btn-lg btn-layout">Iniciar</button>
  </form>
</div>