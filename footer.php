        <div id="footer"><p>Credits: 

<?php
            $contributors = array(
                'Aimilios Tsouvelekakis' => 'aimtsou@gmail.com',
                'Nikos Androulakis' =>  'nick.androul@gmail.com',
                'Fay Kazakou' => 'ekaz1990@gmail.com'
            );
            shuffle( $contributors );
            foreach ( $contributors as $contributor => $url ) {
                    if ($url == 'aimtsou@gmail.com'){
                        echo '<a href="mailto:' . $url . '">' . 'Aimilios Tsouvelekakis </a>';
                    }
                    else if ($url == 'nick.androul@gmail.com'){
                        echo '<a href="mailto:' . $url . '">' . 'Nikos Androulakis </a>';
                    }
                    else {
                        echo '<a href="mailto:' . $url . '">' . 'Fay Kazakou </a>';
                    }
            }
            ?>

  	</div><!-- End of footer-->	
	</body> <!--end of title and menu-->
</html>
