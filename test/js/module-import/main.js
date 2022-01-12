/*import aa, {bb} from './a.js';
aa();
bb();*/
/*
default aa와 bb를 가져옴*/


/*import {aa, bb} from './a.js';*/
/*
aa는 default라서 괄호로, 가져올 수 없음*/


/*import aaa, {bb, bb as bbb} from './a.js';
aaa();
bb();
bbb();*/
/*
aa를 aaa allias로 가져옴
bb를 가져옴
bb를 bbb allias로 가져옴*/


/*import * as bb from './a.js';
bb.bb();*/
/*
모든것을 b라는 namespace로 가져옴*/