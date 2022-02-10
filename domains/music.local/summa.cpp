	#include<stdio.h>
int main() {
  int a,b,c;
  scanf("%d",&a);
    b=a/60;
    c=a%60;
    if(a%60 == 0) {
        c=0 + 0;
    }
printf("%d%c%d",b,':',c);
}