<div id="s_visual"><img src="img/s4.jpg"></div>


<div id="s_container">

	
    <div id="s_left">
    	
        <div id="s_category">
        	<h1><a href="board.php">게시판</a></h1>
            <ul>
            	<li><a href="board.php">게시판</a></li>
            </ul>
        </div>
        
    </div>
    
    
    <div id="s_center">
    
    	<h1><?=$title?></h1>
        
      	<div id="s_contents">
        
          	<div id="board">
            
            	<ul id="bd1">
                	<li id="buser">작성자</li>
                    <li id="btitle">제목</li>
                    <li id="bdate">작성일</li>
                </ul>
                
                <ul id="bd2">
                	<?php foreach($lists as $list): ?>
                    <input type="hidden" name="bno" value="<?=$list['bno']?>">
                	<li id="buser"><?=$list['buser']?></li>
                    <li id="btitle"><a class="link" href="read.php?bno=<?=$list['bno']?>"><?=$list['btitle']?></a></li>
                    <li id="bdate"><?=$list['bdate']?></li>
                    <?php endforeach; ?>
                </ul>
                
                <ul id="btn_set">
                	<li><a class="link" href="write.php">글쓰기</a></li>
                </ul>
            
            </div>
            
        </div>
        
    </div>
    

</div>