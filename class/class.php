<?php
session_start();
class Conectar
{
	public static function con()
	{
		$con=mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("hockey");
		return $con;
	}
}
	
class Trabajo
{
	private $usuario=array();
	private $usuario2=array();
	private $empleado=array();
	private $empleados=array();
	private $cliente=array();
	private $proveedor=array();
	private $licencia=array();
	private $horas_extra=array();
	private $ausentismos=array();
	private $producto=array();

	

	



	





	



	

		

	
	
	

		public function get_pedido_producto($id_pedido)
	{
		$sql="SELECT pe.id_pedido , pp.id_producto, pp.cantidad , pr.descripcion, pr.precio FROM pedido pe INNER JOIN pedido_producto pp ON pe.id_pedido = pp.id_pedido INNER JOIN producto pr ON pp.id_producto = pr.id_producto WHERE pe.id_pedido = $id_pedido";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->pedido2[]=$reg;
		}
		return $this->pedido2;
	}

	

		public function add_partido1($hora, $local,$visitante,$fecha,$goll,$golv)
	{
		$sql="INSERT INTO `cuarta categoria`(`hora`, `local`, `visitante`, `fecha`, `goll`, `golv`) VALUES ('$hora','$local','$visitante','$fecha','$goll','$golv')";
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue ingresado correctamente');
			window.location='agregarpartido.php';
		</script>";
	}
		public function add_partido2($hora, $local,$visitante,$fecha,$goll,$golv)
	{
		$sql="INSERT INTO `quinta categoria`(`hora`, `local`, `visitante`, `fecha`, `goll`, `golv`) VALUES ('$hora','$local','$visitante','$fecha','$goll','$golv')";
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue ingresado correctamente y entro a quinta');
			window.location='agregarpartido.php';
		</script>";
	}
	public function add_partido3($hora, $local,$visitante,$fecha,$goll,$golv)
	{
		$sql="INSERT INTO `sexta categoria`(`hora`, `local`, `visitante`, `fecha`, `goll`, `golv`) VALUES ('$hora','$local','$visitante','$fecha','$goll','$golv')";
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue ingresado correctamente');
			window.location='agregarpartido.php';
		</script>";
	}

	public function get_partidos1()
	{
		$query = "SELECT `hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv` FROM `cuarta categoria` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_partidos1_ord()
	{
		$query = "SELECT `hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv` FROM `cuarta categoria` WHERE 1 ORDER BY fecha ASC";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_partidos2_ord()
	{
		$query = "SELECT `hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv` FROM `quinta categoria` WHERE 1 ORDER BY fecha ASC";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_partidos3_ord()
	{
		$query = "SELECT `hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv` FROM `sexta categoria` WHERE 1 ORDER BY fecha ASC";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
   public function get_partidos2()
	{
		$query = "SELECT `hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv` FROM `quinta categoria` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_partidos3()
	{
		$query = "SELECT `hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv` FROM `sexta categoria` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }

	public function get_partido1($id_partido)
	{	
		
			$sql="SELECT `hora` , `local` , `visitante` , `fecha` , `id_partido`, `goll`, `golv` FROM `cuarta categoria` WHERE id_partido =$id_partido";
		
		
		$res=mysql_query($sql, Conectar::con());
		if ($reg=mysql_fetch_assoc($res))
		{
			$this->producto[]=$reg;
		}
		return $this->producto;
	}
	public function get_partido2($id_partido)
	{	
		
			$sql="SELECT `hora` , `local` , `visitante` , `fecha` , `id_partido`, `goll`, `golv` FROM `quinta categoria` WHERE id_partido =$id_partido";
		
		
		$res=mysql_query($sql, Conectar::con());
		if ($reg=mysql_fetch_assoc($res))
		{
			$this->producto[]=$reg;
		}
		return $this->producto;
	}
	public function get_partido3($id_partido)
	{	
		
			$sql="SELECT `hora` , `local` , `visitante` , `fecha` , `id_partido`, `goll`, `golv` FROM `sexta categoria` WHERE id_partido =$id_partido";
		
		
		$res=mysql_query($sql, Conectar::con());
		if ($reg=mysql_fetch_assoc($res))
		{
			$this->producto[]=$reg;
		}
		return $this->producto;
	}
		public function get_equipos1()
	{
		//$query = "SELECT `local` FROM `cuarta categoria` GROUP BY local UNION SELECT `visitante` FROM `cuarta categoria` GROUP BY visitante ORDER BY local ASC ";
		$query = "SELECT * FROM vista_equipos LEFT JOIN equipos ON vista_equipos.local = equipos.equipo ORDER BY puntos DESC";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_equipos2()
	{
		$query = "SELECT * FROM vista_equipos2 LEFT JOIN equipos2 ON vista_equipos2.local = equipos2.equipo ORDER BY puntos DESC";
		
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_equipos3()
	{
		$query = "SELECT * FROM vista_equipos3 LEFT JOIN equipos3 ON vista_equipos3.local = equipos3.equipo ORDER BY puntos DESC";
		
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_puntos1()
    {		
    	$query = "SELECT * FROM `equipos` WHERE 1";
    	$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;

    }
    public function get_puntos2()
    {		
    	$query = "SELECT * FROM `equipos2` WHERE 1";
    	$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;

    }
    public function get_puntos3()
    {		
    	$query = "SELECT * FROM `equipos3` WHERE 1";
    	$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;

    }

	public function edit_partido1($hora, $local, $visitante,$fecha,$id_partido,$goll,$golv)
	{
		
			$sql="UPDATE `cuarta categoria` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha',`goll`='$goll',`golv`='$golv' WHERE id_partido=$id_partido";
	
		
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue modificado correctamente');
			window.location='editar_partido2.php';
		</script>";
	}

	public function edit_partido2($hora, $local, $visitante,$fecha,$id_partido,$goll,$golv)
	{
		
			$sql="UPDATE `quinta categoria` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha',`goll`='$goll',`golv`='$golv' WHERE id_partido=$id_partido";
	
		
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue modificado correctamente');
			window.location='editar_partido2.php';
		</script>";
	}
	public function edit_partido3($hora, $local, $visitante,$fecha,$id_partido,$goll,$golv)
	{
		
			$sql="UPDATE `sexta categoria` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha',`goll`='$goll',`golv`='$golv' WHERE id_partido=$id_partido";
	
		
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue modificado correctamente');
			window.location='editar_partido2.php';
		</script>";
	}
	public function cargar_puntos($local,$j,$g,$e,$p,$gf,$gc,$dif)
	{
				
				for ($i=0;$i<sizeof($local);$i++) {
				$sql="UPDATE `equipos` SET `puntos`=$local[$i] , `j`=$j[$i], `g`=$g[$i], `e`=$e[$i], `p`=$p[$i] ,`gf`=$gf[$i],`gc`=$gc[$i], `dif`=$dif[$i] WHERE id=$i.";
				$res=mysql_query($sql, Conectar::con());
			}
			
			echo "<script type='text/javascript'>
			alert('los puntos fueron cargados corectamente');
			window.location='cuarta_puntos.php';
			</script>";
	}
	public function cargar_puntos2($local,$j,$g,$e,$p,$gf,$gc,$dif)
	{
				
				for ($i=0;$i<sizeof($local);$i++) {
				$sql="UPDATE `equipos2` SET `puntos`=$local[$i] , `j`=$j[$i], `g`=$g[$i], `e`=$e[$i], `p`=$p[$i] ,`gf`=$gf[$i],`gc`=$gc[$i], `dif`=$dif[$i] WHERE id=$i.";
				$res=mysql_query($sql, Conectar::con());
			}
			
			echo "<script type='text/javascript'>
			alert('los puntos fueron cargados corectamente');
			window.location='quinta_puntos.php';
			</script>";
	}
	public function cargar_puntos3($local,$j,$g,$e,$p,$gf,$gc,$dif)
	{
				
				for ($i=0;$i<sizeof($local);$i++) {
				$sql="UPDATE `equipos3` SET `puntos`=$local[$i] , `j`=$j[$i], `g`=$g[$i], `e`=$e[$i], `p`=$p[$i] ,`gf`=$gf[$i],`gc`=$gc[$i], `dif`=$dif[$i] WHERE id=$i.";
				$res=mysql_query($sql, Conectar::con());
			}
			
			echo "<script type='text/javascript'>
			alert('los puntos fueron cargados corectamente');
			window.location='sexta_puntos.php';
			</script>";
	}
	
		
		
	

	public function delete_partido($id_partido,$cat)
	{
		if ($cat=="cuarta")
		{
		$sql="DELETE FROM `cuarta categoria` WHERE id_partido=$id_partido";
		}
		if ($cat=="quinta")
		{
		$sql="DELETE FROM `quinta categoria` WHERE id_partido=$id_partido";
		}
		if ($cat=="sexta")
		{
		$sql="DELETE FROM `sexta categoria` WHERE id_partido=$id_partido";
		}
		
		$res=mysql_query($sql, Conectar::con());
	}
	

	function fechaphp($fecha)
	{

		$dia=substr($fecha,8,2);
		$mes=substr($fecha,5,2);
		$año=substr($fecha,0,4);
		$this->fechaphp=$dia."-".$mes."-".$año;

		return $this->fechaphp;
	} 

	function fechabd($fecha)
	{

		$año=substr($fecha,6,4);
		$mes=substr($fecha,3,2);
		$dia=substr($fecha,0,2);
		$this->fechabd=$año."-".$mes."-".$dia;

		return $this->fechabd;
	} 

	function salir($id_usuario)
	{
		unset($id_usuario);
		session_destroy();
		header("Location: index.php");
	}

	public function menu1()
	{
		echo '
		<div class="navbar navbar-inverse navbar-fixed-top">
		      <div class="navbar-inner">
		        <div class="container">
		          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="brand" href="home.php">Inicio</a>
		          <div class="nav-collapse collapse">
		            <ul class="nav">
		              <li><a href="agregarpartido.php">Agregar partido</a></li>
		               <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Editar partido<b class="caret"></b></a>
		                <ul class="dropdown-menu">
			                  <li><a href="cuarta_categoria.php">Cuarta categoria</a></li>
			                  <li><a href="quinta_categoria.php">Quinta categoria</a></li>
			                  <li><a href="sexta_categoria.php">Sexta categoria</a></li>
		                </ul>
		              </li>
		             <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Borrar partido<b class="caret"></b></a>
		                <ul class="dropdown-menu">
			                  <li><a href="cuarta_borrar.php">Cuarta categoria</a></li>
			                  <li><a href="quinta_borrar.php">Quinta categoria</a></li>
			                  <li><a href="sexta_borrar.php">Sexta categoria</a></li>	
		            </ul>
		            <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Posiciones<b class="caret"></b></a>
		                <ul class="dropdown-menu">
			                  <li><a href="cuarta_puntos.php">Cuarta categoria</a></li>
			                  <li><a href="quinta_puntos.php">Quinta categoria</a></li>
			                  <li><a href="sexta_puntos.php">Sexta categoria</a></li>	
		            </ul>

		             


		          </div>
		        </div>
		      </div>
		    </div>
		    ';
	}

	}