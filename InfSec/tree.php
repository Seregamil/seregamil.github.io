<?php
	
	
	function dipciplinesTree($start)
	{
		$files = array();
		$handle = opendir($start);
		while (false !== ($file = readdir($handle)))
		{
			if ($file != '.' && $file != '..')
			{
				if (is_dir($start.'/'.$file))
				{
					$dir = scandirs($start.'/'.$file);
					$files[$file] = $dir;
				}
				else 
				{
					//array_push($files, $file);
					echo '<li class="nav-item">';
					echo '<a class="nav-link active" href="#">';
					echo $file;
					echo '</a>';
					echo '</li>';
				}
			}
		}
		closedir($handle);
		//return $files; 
	}
	
	
/*
<li class="nav-item">
					<a class="nav-link active" href="#">Active</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>*/
?>
