<?php

class FormView
{
    public function viewResult($data, $file, $fakultas)
    {
        include "result.php";
    }
		public function viewForm()
		{
			include 'form.php';
		}
}
