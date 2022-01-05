<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="CSS/style.css">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="JS/script.js" defer></script>

<div id="elem">
        <!-- drag & drop section -->
        <div class="zone">
            <!-- drag section -->
            <section class="part trash" id="items">
                <h3>Texte</h3>
                <div>
                    <div class="drag">
                        <h1>Grand titre</h1>
                    </div>
                    <div class="drag">
                        <h3>Petit titre</h3>
                    </div>
                    <div class="drag">
                        <p>Paragraphe</p>
                    </div>
                    <div class="drag">
                        <ol>
                            <li>premier élément</li>
                            <li>second élément</li>
                            <li>troisième élément</li>
                        </ol>
                    </div>

                    <div class="drag">
                        <label for="textarea">Text Area</label>
                        <div>                     
                          <textarea id="textarea" name="textarea">default text</textarea>
                        </div>
                      </div>



                </div>

                <h3>Boutons</h3>
                <div>

                    <div class="drag">
                        <button>Bouton</button>
                    </div>

                    <div class="drag">
                        <label for="filebutton">File Button</label>
                        <div>
                          <input name="filebutton" type="file">
                        </div>
                      </div>



                </div>



                <h3>Radios / Checkboxes</h3>

                <div>
                    <div class="drag">
                        <label for="checkboxes">Checkboxes</label>
                        <div>
                          <label for="checkbox-0">
                            <input type="checkbox" name="checkboxes" id="checkbox-0" value="1">
                            1
                          </label>
                          <label for="checkbox-1">
                            <input type="checkbox" name="checkboxes" id="checkbox-1" value="2">
                            2
                          </label>
                          <label for="checkbox-2">
                            <input type="checkbox" name="checkboxes" id="checkbox-2" value="3">
                            3
                          </label>
                          <label for="checkbox-3">
                            <input type="checkbox" name="checkboxes" id="checkbox-3" value="4">
                            4
                          </label>
                        </div>
                      </div>

                      <div class="drag">
                        <label for="radios">Radios</label>
                        <div> 
                          <label for="radio-0">
                            <input type="radio" name="radios" id="radio-0" value="1" checked="checked">
                            1
                          </label> 
                          <label for="radio-1">
                            <input type="radio" name="radios" id="radio-1" value="2">
                            2
                          </label> 
                          <label for="radio-2">
                            <input type="radio" name="radios" id="radio-2" value="3">
                            3
                          </label> 
                          <label for="radio-3">
                            <input type="radio" name="radios" id="radio-3" value="4">
                            4
                          </label>
                        </div>
                      </div>

                      <div class="drag">
                        <label for="select">Select Basic</label>
                        <div>
                          <select name="select">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                          </select>
                        </div>
                      </div>

                      <div class="drag">
                        <label for="selectmultiple">Select Multiple</label>
                        <div>
                          <select name="selectmultiple"  multiple="multiple">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                          </select>
                        </div>
                      </div>


                </div>

                <h3>Input</h3>
                <div>
                    <div class="drag">
                        <label for="searchinput">Search Input</label>
                        <div>
                            <input name="searchinput" type="search" placeholder="placeholder"
                                class="form-control input-md">
                            <button>Search</button>
                        </div>
                    </div>

                    <div class="drag">
                        <label for="passwordinput">Password Input</label>
                        <div>
                          <input name="passwordinput" type="password" placeholder="placeholder" class="form-control input-md">
                        </div>
                      </div>
                




                </div>




                <h3>Select</h3>

                <div>ajouterItems</div>

            </section>
            <!-- drop section  -->
            <form class="part" id="form">
                <div id="drop">
                </div>
            </form>

        </div>
    </div>


    <!-- section code html -->
    <textarea id="code_generated" style="margin-left: 400px;">
</textarea>
