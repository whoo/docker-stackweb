<!DOCTYPE html>
<html>

<head></head>
<link rel=stylesheet type=text/css href=style.css>




<body>

<div>
<h1> NginX Test > with php-fpm </h1>
<p> you're on <?php echo $_SERVER['HOSTNAME'] ?></p>
</div>

<canvas id="c"></canvas>


<script>
D=document;d=D.body.style;d.margin=0;d.overflow="hidden";c=window,d=c.innerWidth,e=c.innerHeight,g=D.body.children[1],i=d/2,j=e/2;g.width=d;g.height=e;k=g.getContext("2d");k.globalAlpha=0.3;l=Math,m=l.random,n=l.sin,o=l.floor,p=10,q=[],r=0,s=0.1,V=500,W=190,Q=0.3;function E(n,f){g.addEventListener(n,f,!1);}E("mousemove",function(a){i=a.clientX;j=a.clientY});function t(a){var f=0;if(a.detail) f=-a.detail/3;else f=a.wheelDelta/120;if(f>0&&s<1||f<0&&s+f/25>0.1)s+=f/25}E("DOMMouseScroll",t);E("mousewheel",t);function u(a){a.x=(m()*d-d*0.5)*p;a.y=(m()*e-e*0.5)*p;a.a=p;a.b=0;a.c=0}for(var v=0,w;v<V;v++){w={};u(w);q.push(w)}setInterval('k.fillStyle="#000";k.fillRect(0,0,d,e);for(a=i-d/2+d/2,f=j-e/2+e/2,h=0;h<V;h++){b=q[h],x=b.x/b.a,y=b.y/b.a,z=1/b.a*5+1,A=n(Q*h+r)*64+W,B=n(Q*h+2+r)*64+W,C=n(Q*h+4+r)*64+W;if(b.b!=0){k.strokeStyle="rgb("+o(A)+","+o(B)+","+o(C)+")";k.lineWidth=z;k.beginPath();k.moveTo(x+a,y+f);k.lineTo(b.b+a,b.c+f);k.stroke()}b.b=x;b.c=y;b.a-=s;if(b.a<s||b.b>d||b.c>e)u(b)}r+=0.1;',25);
</script>

</body>
</html>
