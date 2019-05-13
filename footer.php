
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    
                   
                    <?php
					wp_nav_menu(
					array(

                        'theme_location'=>'footer',
						'container'=>'div',
                        
                        'container_class'=>'pull-left ',
						
						'menu_class'=>'navbar-nav ml-auto'
						
						)
					);
				?>
                    
              
                </div>
                <div class="col-sm-4 copyright">
                    <p class="pull-right ">
                        Copyright &copy; 2019 
                    </p>
                </div>
            </div>
        </div>

    </footer>



</div>
</body>
</html>