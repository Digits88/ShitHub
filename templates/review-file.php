    <main role="main" class="container-flex">

      <div class= "container">
        <div class= "row">
            <div class= "col">
                <pre>
                 <code>
                    #include
                    < iostream.h>
                    // Addieren in einer Unterfunktion
                    int
                     add (int a, int b)
                    {
                    int c = a+b;
                    return c;
                    }
                    int
                     Sub (int a, 
                    int b)
                    {
                    int c = a
                    -
                    b;
                    return c;
                    }
                    int
                     Mal (int a, int b)
                    {
                    int c = a*b;
                    return c;
                    }
                    int
                     Div (int a, int b)
                    {
                    int c = a/b;
                    return c;
                    } 
                    int main
                    ()
                    {
                    cout
                     << "Willkommen zum Mathematikprogramm von Steffen Schulze!
                    \
                    n";
                    cout
                     << "***************
                    ***************************************
                    \
                    n
                    \
                    n";
                    cout
                     << "Geben Sie den ersten Wert ein! 
                    \
                    n";
                    int Zahl1;
                    cin
                      >> Zahl1;
                    cout
                     << "Geben Sie den zweiten Wert ein! 
                    \
                    n";
                    int Zahl2;
                    cin 
                     >> Zahl2;
                    cout
                     << "Wert1 = " << Zahl1 << "
                    \
                    n";
                    cout
                     << "Wert2 =
                     " << Zahl2 <
                    \
                    n";
                    cout
                     << "
                    \
                    n
                    \
                    n";
                    cout
                     << "Bitte geben Sie die Rechenoperation ein! 
                    \
                    n";
                    cout
                     << "========================================
                    \
                    n
                    \
                    n";
                    cout
                     << "Zahl Addition  = 1
                    \
                    n";
                    cout
                     << "Zahl Division  = 2
                    \
                    n";
                    cout
                     << "Multiplikation = 3
                    \
                    n";
                    cout
                    << "Zahl Division  = 4
                    \
                    n";
                    cout
                     << "
                    ------------------
                    \
                    n
                    \
                    n";
                    cout
                     << "Ihre Eingabe.....: "
                 </code>
             </pre>
            </div>
        
            <div class= "col">
                <form action="dashboard.html">
                  <div>
                    <h4> Sicherheit </h4>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="security" value="1"> 1
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="security" value="2"> 2
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="security" value="3"> 3
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="security" value="4"> 4
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="security" value="5"> 5
                        </label>
                    </div>
                    
                    <p>
                        <textarea id="securitycomment" class= "span6" rows= "5" placeholder= "Anmerkungen"></textarea>
                    </p>
                  </div>
                  
                  <div>
                    <h4> Sauberkeit </h4>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="cleanliness" value="1"> 1
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="cleanliness" value="2"> 2
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="cleanliness" value="3"> 3
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="cleanliness" value="4"> 4
                        </label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="cleanliness" value="5"> 5
                        </label>
                    </div>
                    
                    <p>
                        <textarea id="cleanlinesscomment" class= "span6" rows= "5" placeholder= "Anmerkungen"></textarea>
                    </p>
                  </div>
                  
                    <p>
                        <textarea id="misccomment" class= "span6" rows= "5" placeholder= "Sonstiges"></textarea>
                    </p> 
                  <button type= "submit" class= "btn btn-primary">Absenden</button>
                   
                </form>
            </div>
        </div>
      </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
