<?php 
	
try{
		$conn=new PDO("mysql:host=localhost;dbname=e_books","root","");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$b_id=$_POST['b_id'];
		$b_nm=$_POST['b_nm'];
		$b_no=$_POST['b_no'];
		$b_author=$_POST['b_author'];
		$b_publisher=$_POST['b_publisher'];
		$b_desc=$_POST['b_desc'];
		$b_price=$_POST['b_price'];
		$b_path=$_POST['b_path'];
		$newbook=0;

		if(!empty($_POST)){
			$newbook=1;
		}
		
	if(isset($_POST["b_nm"])&&isset($_POST["b_author"])&&isset($_POST["b_publisher"])&&isset($_POST["b_desc"])&&isset($_POST["b_price"])&&isset($_POST["b_nm"])&&isset($_POST["b_nm"])){
		
		

		$sql="INSERT INTO books(b_id,b_nm,b_no,b_author,b_publisher,b_desc,b_price,b_path) VALUES
		('','$b_nm','$b_no','$b_author','$b_publisher','$b_desc','$b_price','$b_path');";
    	
    	if(!empty($_POST['science_fiction'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','science fiction','$newbook');";
    	
    		}
    	if(!empty($_POST['novel'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','novel','$newbook');";
    	
    		}
    	if(!empty($_POST['kid'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','kid','$newbook');";
    	
    		}
    	if(!empty($_POST['action_&_aduencture'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','action & aduencture','$newbook');";
    	
    		}
    	if(!empty($_POST['romance'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','romance','$newbook');";
  
    	}
    	if(!empty($_POST['myStory_&_fantasy'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','myStory & fantasy','$newbook');";
  
    	}
    	if(!empty($_POST['Horror'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','horror','$newbook');";
  
    	}
    	if(!empty($_POST['travel'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','travel','$newbook');";
  
    	}
    	if(!empty($_POST['computer_science'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','computer science','$newbook');";
  
    	}
    	if(!empty($_POST['science'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','science','$newbook');";
  
    	}
    	if(!empty($_POST['history'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','history','$newbook');";
  
    	}
    	if(!empty($_POST['math'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','math','$newbook');";
  
    	}
    	if(!empty($_POST['poetry'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','poetry','$newbook');";
  
    	}
    	if(!empty($_POST['encyclopedia'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','encyclopedia','$newbook');";
  
    	}
    	if(!empty($_POST['Religious'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','Religious','$newbook');";
  
    	}
    	if(!empty($_POST['biographies'])){
    		$sql=$sql." INSERT INTO book_cat(b_id,b_cat,new) VALUES
    			('$b_id','biographies','$newbook');";
  
    	}

    	$conn->exec($sql);
    	echo "New record created successfully";
    }
}
		catch(PDOException $e)
    	{

    	echo $sql . "<br>" . $e->getMessage();
    	}

		$conn = null;
?>