<?php
include("quotesearch.php");
class quotesearch
{
        var $quotesearch;
        var $full;
        public function getdate($from,$to)
	{
                $quotesearch=new quotesearch();
                $full=$quotesearch->getdate($from,$to);
                return $full;
        }
        public function getquotesf($finalized)
	{
                $quotesearch=new quotesearches();
                $full=$quotesearch->getquotesf($finalized);
		echo"$full";
                return $full;
        }
        public function getquoteso($ordered)
	{
                $quotesearch=new quotesearch();
                $full=$quotesearch->getquoteso($ordered);
                return $full;
        }
        public function getquotess($sanctioned)
	{
                $quotesearch=new quotesearch();
                $full=$quotesearch->getquotess($sanctioned);
                return $full;
        }

	public function getquotesc($c_id)
	{
		$quotesearch=new quotesearch();
		$full=$quotesearch->getquotesc($c_id);
		return $full;
	}	
		
	public function getquotessa($sassoc_id)
	{
		$quotesearch=new quotesearch();
                $full=$quotesearch->getquotessa($sassoc_id);
                return $full;
	
	}

}
?>

