<h1><?php echo __("foldersTitle") ?></h1>

<p><?php echo __("folders_p1") ?></p>

<ul>
    <li>
        root
        <ul>
            <li>
                controllers
                <ul>
                    <li>
                        App.php
                    </li>
                </ul>
            </li>
            <li>
                lib
                <ul>
                	<li>
                		config
                		<ul>
                			<li>routes.php</li>
                		</ul>
                	</li>
                    <li>
                        css
                    </li>
                    <li>
                        img
                    </li>
                    <li>
                        js
                    </li>
                    <li>
                        vendor
                        <ul>
                        	<li>doctrine</li>
                        	<li>
                        		PLAIN_PHP
                        		<ul>
                        			<li>Controller.php</li>
                        			<li>Routes.php</li>
                        		</ul>
                    		</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                models
            </li>
            <li>
                views
                <ul>
                    <li>
                        App
                        <ul>
                            <li>
                                index.php
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                ajax.php
            </li>
            <li>
                index.php
            </li>
        </ul>
    </li>
</ul>

<p><?php echo __("folders_p2") ?></p>
<p><?php echo __("folders_p3", Manual::linkTo("doctrine")) ?></p>



