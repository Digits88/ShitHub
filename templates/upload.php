<main role="main" class="container-flex">
    <form action="model/upload2.php" method = "post" enctype="multipart/form-data">
        <div class="container">
            <div class= "row">
                <div class= "col">
                    <label style="font-size: 20px;">Titel</label>
                    <input class= "form-control" name="the_title" id="title" style="width: 100%"></textarea>
                </div>
            </div>
            <div class= "row">
                <div class= "col-2">
                    <div class="form-group">
                        <label style="font-size: 20px; margin-top: 15px;">Code hochladen</label>
                        <input name="the_file" type="file" class="form-control-file" id="upload-file">
                    </div>
                    <label style="font-size: 20px;margin-top: 15px">Programmiersprachen</label>
                    <select name="the_language" id="language" class= "form-control">
                        {pl}
                    </select>
                </div>
            </div>
            <div class= "row">
                <div class= "col">
                    <label style="font-size: 20px;">Beschreibung</label>
                    <textarea class= "form-control" name="the_description" id="beschreibung" rows="10" style="width: 100%"></textarea>
                    
                    <input name="the_tags" class= "form-control" type= "text" placeholder= "Tags... (mit Komma trennen!)" style= "margin-top: 15px">
                    <button type= "submit" class= "btn btn-primary" style= "margin-top: 15px">Hochladen</button>
                    <a href= "index.php"><button type="button" class= "btn btn-secondary" style= "margin-top: 15px; margin-left: 5px">Abbruch</button></a>
                </div>
                
            </div>
        </div>
    </form>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
    $('#language').select2({
      placeholder: 'Select a programming language'
    });
    </script>
