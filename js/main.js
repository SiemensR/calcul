

var z = 0;
var x = 0;
var y = 0;
var t = 0;




function ones() {
    document.getElementById('result').value = '1';
     x = 1;

};

function twos(){
  document.getElementById('result').value = '2';
   x = 2;

};

function trees(){
  document.getElementById('result').value = '3';
   x = 3;

};

function fours(){
  document.getElementById('result').value = '4';
   x = 4;

};

function fives(){
    document.getElementById('result').value = '5';
     x = 5;

};

function sixes(){
  document.getElementById('result').value = '6';
   x = 6;

};

function sevens(){
  document.getElementById('result').value = '7';
   x = 7;

};

function eights(){
  document.getElementById('result').value = '8';
   x = 8;

};

function nines(){
  document.getElementById('result').value = '9';
   x = 9;

};

function zeros(){
  document.getElementById('result').value = '0';
   x = 0;

};

function pluses(){
  document.getElementById('result').value = '';
t = x;
    sl = true;

};

function minuses(){
  document.getElementById('result').value = '';
t = x;
    vt = true;
};

function devides(){
  document.getElementById('result').value = '';
t = x;
    delen = true;
};

function multiples(){
  document.getElementById('result').value = '';
t = x;
    umn = true;
};

function showMeResult(){

  if (z == 0) {document.getElementById('result').value = ''};
  if (sl == true) {document.getElementById('result').value = t + x};
  if (vt == true) {document.getElementById('result').value = t - x};
  if (delen == true) {document.getElementById('result').value = t / x};
  if (umn == true) {document.getElementById('result').value = t * x};

};
