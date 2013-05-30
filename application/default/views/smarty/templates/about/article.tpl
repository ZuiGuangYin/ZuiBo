
		<div class=" greenbox">
			<div class="title">
				<h1>{$info.title}</h1>
			</div>
			
			<div class="entry"> 
				<p>{$info.maker}发表于{$info.cdat|date_format:"%Y-%m-%d"}</p>
			    <p>{$info.contents|smarty:nodefault}</p>
				
			</div>
			<hr/>
			
			
		</div>
