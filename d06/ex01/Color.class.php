<?PHP
class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = False;
	public function doc()
	{
		echo file_get_contents("Color.doc.txt");
		echo "\n";
	}
	public function __construct(array $kwargs)
	{
		if (!isset($kwargs['rgb']) && (!isset($kwargs['red']) || !isset($kwargs['green']) || !isset($kwargs['blue'])))
            return False;
		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = $kwargs['rgb'] >> 16 & 0xFF;
			$this->green = $kwargs['rgb'] >> 8 & 0xFF;
			$this->blue = $kwargs['rgb'] & 0xFF;
		}
		else if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) && array_key_exists('blue', $kwargs))
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
		}
		if (self::$verbose)
            echo $this->__toString() . " constructed." . PHP_EOL;
        return True;
	}
	public function __destruct()
	{
		if (self::$verbose)
            echo $this->__toString() . " destructed." . PHP_EOL;
	}
	public function __ToString()
	{
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}
	
	public function add(Color $rhs)
	{
		return ( new Color(array( 'red' => $this->red + $rhs->red, 'green' => $this->green + $rhs->green, 'blue' => $this->blue + $rhs->blue)));
	}
	public function sub(Color $rhs)
	{
		return ( new Color(array( 'red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green, 'blue' => $this->blue - $rhs->blue)));
	}
	public function mult($f)
	{
		return ( new Color(array( 'red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f)));
	}
}





/*require_once 'Color.class.php';


print( Color::doc() );
Color::$verbose = True;

$red     = new Color( array( 'red' => 0xff, 'green' => 0   , 'blue' => 0    ) );
$green   = new Color( array( 'rgb' => 255 << 8 ) );
$blue    = new Color( array( 'red' => 0   , 'green' => 0   , 'blue' => 0xff ) );

$yellow  = $red->add( $green );
$cyan    = $green->add( $blue );
$magenta = $blue->add( $red );

$white   = $red->add( $green )->add( $blue );

print( $red     . PHP_EOL );
print( $green   . PHP_EOL );
print( $blue    . PHP_EOL );
print( $yellow  . PHP_EOL );
print( $cyan    . PHP_EOL );
print( $magenta . PHP_EOL );
print( $white   . PHP_EOL );

Color::$verbose = False;

$black = $white->sub( $red )->sub( $green )->sub( $blue );
print( 'Black: ' . $black . PHP_EOL );

Color::$verbose = True;

$darkgrey = new Color( array( 'rgb' => (10 << 16) + (10 << 8) + 10 ) );
print( 'darkgrey: ' . $darkgrey . PHP_EOL );
$lightgrey = $darkgrey->mult( 22.5 );
print( 'lightgrey: ' . $lightgrey . PHP_EOL );

$random = new Color( array( 'red' => 12.3, 'green' => 31.2, 'blue' => 23.1 ) );
print( 'random: ' . $random . PHP_EOL );*/
?>