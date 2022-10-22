<?php if (isset($_POST['boton'])) {
                    if (strlen($_POST['email']) == 0 || strlen($_POST['password'] == 0)) {
                        echo"<style>.loader{display: none !important; animation:none !important;</style>";
                        echo '<p class="text-red-500 text-xs italic mt-2"  >Por favor complete todos los campos.</p>';
                    }else{
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $consulta = 'SELECT * from';
                    }                        
                        
                    
                }
                ?>