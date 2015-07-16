#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <ctype.h>

#define N 29
#define length 30

char *words[N];
char *head_address[N];

int comp(const void *c1,const void *c2){
  return (strcmp(*(char**)c1,*(char**)c2));
}

void read_file(char *filename){
  FILE *file;
  char a[length];
  if((file = fopen(filename,"r")) == NULL){
    printf("Failure to open file : %s\n",filename);
    exit(1);
  }
  int j=0;
  while(fgets(a,length-1,file)!=NULL){
    words[j] = (char*)malloc(sizeof(char)*length);
    a[strlen(a)] = '\0';
    strcpy(words[j],a);
    head_address[j] = words[j];//In order to free later
    j++;
  }
  fclose(file);
}


void output_file(char* filename){
  FILE* file;
  if((file = fopen(filename,"w")) == NULL){
    printf("Failure to open file : %s\n",filename);
    exit(1);
  }
  for(int i=0;i<N;i++)
    if(fprintf(file,"%s\n",words[i])<0)
      break;
  fclose(file);
}

int main(void){
  read_file("name");
  qsort(words,N,sizeof(char*),comp);
  // output_file("word_noun");
  for(int i=0;i<N;i++){
    printf("%s",words[i]);
  }
  for(int i=0;i<N;i++)
    free(head_address[i]);
}
