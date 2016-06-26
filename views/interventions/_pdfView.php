<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--<link rel="stylesheet" href="<?/*= Yii::$app->urlManager->baseUrl.'/web/css/semantic.min.css' */?>"/>
    <link rel="stylesheet" href="<?/*= Yii::$app->urlManager->baseUrl.'/web/css/font-awesome.min.css' */?>"/>-->
</head>
<body>


	<div class="panel panel-default">
		  <div class="panel-heading">
				<h3 class="panel-title">Intervention</h3>
		  </div>
		  <div class="panel-body">
				<table class="table table-striped table-bordered detail-view">
                  <tbody>
                  <tr>
                      <td>Nom de l'intervention</td><td><?= $model->name ?></td>
                  </tr>
                  <tr>
                      <td>Code </td><td><?= $model->code ?></td>
                  </tr>
                  <tr>
                      <td>Date</td><td><?= $model->date_intervention ?></td>
                  </tr>
                  <tr>
                      <td>Type</td><td><?= $model->type->name ?></td>
                  </tr>
                  <tr>
                      <td>Correspondant</td><td><?= $model->correspondant->name ?></td>
                  </tr>
                  <tr>
                      <td>Lieu</td><td><?= $model->lieu->name ?></td>
                  </tr>
                  </tbody>
              </table>
		  </div>
	</div>

<div class="panel panel-default">
	  <div class="panel-heading">
			<h3 class="panel-title">Machine</h3>
	  </div>
	  <div class="panel-body">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 20px">
          	<table class="table table-hover">
          		<thead>
          			<tr>
          				<td>Nom</td><td><?= $model->machine->name ?></td>
          			</tr><tr>
          				<td>S/N</td><td><?= $model->machine->s_n ?></td>
          			</tr><tr>
          				<td>Nom du collaborateur</td><td><?= $model->machine->collaborator_name ?></td>
          			</tr><tr>
          				<td>Adresse Mac Lan</td><td><?= $model->machine->adr_mac_lan ?></td>
          			</tr><tr>
          				<td>Adresse IP</td><td><?= $model->machine->adr_ip ?></td>
          			</tr>
          		</thead>
          	</table>
          </div>
          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Informations materiels</h3>
                  </div>
                  <div class="panel-body">
                      <table class="table table-striped table-bordered detail-view">
                          <tbody>
                          <tr>
                              <td>Alimentation</td><td><?= $model->machine->Alimentation   ?></td>
                          </tr>
                          <tr>
                              <td>Cable</td><td><?= $model->machine->cable   ?></td>
                          </tr>
                          <tr>
                              <td>Hdd</td><td><?= $model->machine->hdd   ?></td>
                          </tr>
                          <tr>
                              <td>Ram</td><td><?= $model->machine->ram    ?></td>
                          </tr>
                          <tr>
                              <td>Carte mere</td><td><?= $model->machine->carte_mere    ?></td>
                          </tr>
                          <tr>
                              <td>Lecteur</td><td><?= $model->machine->lecteur    ?></td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Informations logiciels</h3>
                  </div>
                  <div class="panel-body">
                      <table class="table table-striped table-bordered detail-view">
                          <tbody>
                          <tr>
                              <td>Bios</td><td><?= $model->machine->bios == 1 ? '<span class="label label-success">OK</span>': '<span class="label label-danger">KO</span>'   ?></td>
                          </tr>
                          <tr>
                              <td>Os</td><td><?= $model->machine->os == 1 ? '<span class="label label-success">OK</span>': '<span class="label label-danger">KO</span>'   ?></td>
                          </tr>
                          <tr>
                              <td>Antivirus</td><td><?= $model->machine->antivirus == 1 ? '<span class="label label-success">OK</span>': '<span class="label label-danger">KO</span>'   ?></td>
                          </tr>
                          <tr>
                              <td>Cpu</td><td><?= $model->machine->cpu == 1 ? '<span class="label label-success">OK</span>': '<span class="label label-danger">KO</span>'   ?></td>
                          </tr>
                          <tr>
                              <td>Registre</td><td><?= $model->machine->registre == 1 ? '<span class="label label-success">OK</span>': '<span class="label label-danger">KO</span>'   ?></td>
                          </tr>
                          <tr>
                              <td>Autres config</td><td><?= $model->machine->autre_config == 1 ? '<span class="label label-success">OK</span>': '<span class="label label-danger">KO</span>'   ?></td>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
	  </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Actions</h3>
    </div>
    <div class="panel-body">
        <ul >
            <?php foreach($model->actions as $action ) :?>
                <li class=""><?= $action->text ?></li>
            <?php  endforeach ?>
        </ul>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Taches</h3>
    </div>
    <div class="panel-body">
        <ul>
            <?php foreach($model->taches as $tache ) :?>
                <li class=""><?= $tache->text ?></li>
            <?php  endforeach ?>
        </ul>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Observations</h3>
    </div>
    <div class="panel-body">
        <ul >
            <?php foreach($model->observations as $observation ) :?>
                <li class=""><?= $observation->text ?></li>
            <?php  endforeach ?>
        </ul>
    </div>
</div>


</body>
</html>