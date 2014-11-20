<?php

/*
* Author : Savaş Can Altun
* Web : http://savascanaltun.com.tr
* Mail : savascanaltun@gmail.com
* GİT : http://github.com/saltun
* Date : 20.11.2014
* Update : 20.11.2014
*/

class sPagination
{
	
public  $getname,$totalpost,$maxpost,$url,$size,$lang; 


function pageList(){ 

	if (empty($this->getname)) {
		$this->getname="page";
	}

	if(isset($_GET[$this->getname])){ 
		$page=$_GET[$this->getname]; } 
		else{ 
		$page=1; 
	} 

	$total_pages3 = ceil( $this->totalpost /$this->maxpost); 
	 
	if($total_pages3>1){ 

		$part='<ul class="pagination'.' '.'pagination-'.$this->size.'"><li><a href="'.$this->url.'?'.$this->getname.'='; 
		$last='">&laquo;</a></li> <li><a href="'.$this->url.'?'.$this->getname.'='.(1).'">'.$this->lang['first'].'</a></li>  '; 
		
		 if(($page-1)<=1){ 
			 echo $part.(1).$last;  
		  } 
		 else{ 
			 echo $part.($page-1).$last; 
		 } 

		  if($page<=4 and $page != 0){ 

				 if($total_pages3==1 || $total_pages3==2 || $total_pages3==3 || $total_pages3==4 || $total_pages3==5  ){ 
				  $total_pages=$total_pages3; 
				   $i=1; 
			} 

			else{ 
				$total_pages=5; 
				 $i=1; 
			} 

	 } 

	 else if($page>=4 && $page<($total_pages3-2)  ){ 
	  
		 $total_pages=$page+2; 
		 $i=$page-2; 
	  
	 } 
	  
	 else if($page>=($total_pages3-2) ){ 
	  	$total_pages=$total_pages3; 
		 $i=$total_pages3-4; 

	 } 
	  
	 for ($i ; $i <=$total_pages ; $i ++) { 
		$li ="<li";  
		 if($page==$i)  { 
			 $ac= "class='active'  "; 
		if($page==$total_pages3){  

			$title= "title=' ".$this->totalpost.'  of  '.$this->totalpost."&nbsp;".$this->lang['totalrecord']."'  "; 

		} 
		else{ 

			$title= "title=' ".$this->maxpost*$page.'  of  '.$this->totalpost. "&nbsp;".$this->lang['totalrecord']." ' "; 
		} 

		 } 
		else{ 
		  $ac=""; 
		  $title=""; 
		 } 

		  echo $li.' '.$ac."><a ".$title." href='".$this->url."?".$this->getname."=" .$i ."'>" . $i."</a> </li> " ; 

	 } 

	 if($page+1>$total_pages3){ 
		 $pp=$page; 

	 } 
	  else{ 
		 $pp=$page+1; 
	 } 
		 $pag= '<li><a href="'.$this->url.'?'.$this->getname.'='.$total_pages3.'">'.$this->lang['last'].'</a></li> <li><a href="'.$this->url.'?'.$this->getname.'='.$pp.'">&raquo;</a></li></ul>'; 
		 echo $pag;  

	} 

	else{ 

		echo ''; 
	} 
  } 

	
}
