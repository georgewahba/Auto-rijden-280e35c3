<?php 
print("hoe oud ben je?");
$a= readline(":");

if ($a < 16.5) {
	print("helaas, je mag nog niet beginnen met je rijbewijs");
};

if ($a > 16.5) {
	print("je mag beginnen met je rijbewijs");
};