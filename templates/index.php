    <main role="main" class="container">

      <div class= "container">
        <div class= "row">
            <div class= "col-sm" align= "center">
                <h3> Ausstehende Reviews </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope= "col"></th>
                            <th scope= "col"> Review </th>
                            <th scope= "col"></th> 
                        </tr>
                    </thead>
                    <tbody>
                        {revnext}
                    </tbody> 
                </table>
    
            </div>
            
            <div class= "col-sm" align= "center">
                <h3> Letzte Reviews </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope= "col"></th>
                            <th scope= "col"> Datum </th>
                            <th scope= "col"> Review </th>
                            <th scope= "col"> User </th>
                            <th scope= "col"></th> 
                        </tr>
                    </thead>
                    <tbody>
                        {revhot}
                    </tbody>
                </table>
            </div>
        </div>
                
      </div>
    </main>

