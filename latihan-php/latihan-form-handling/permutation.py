
# deleted = []


# def doubleOcheck(text):
#     for i in range(len(text)):
#         if i < len(text) - 1:
#             if text[i] == text[i+1] or text[-1] == text[0]:
#                 deleted.append(text)
#                 return True
#     return False


# def permutation(lst):

#     if len(lst) < 2:
#         return lst

#     permlist  = []

#     for i in range(len(lst)):

#         m = lst[i]

#         remlist = lst[:i] + lst[i+1:]


#         for p in permutation(remlist):
#             permlist.append(m+p)

#     return permlist


# letters = "Apoof"
# letters = [i for i in letters]

# print()
# result = set(permutation(letters))
# print(result)
# print(len(result))


# o = []
# for i in result:
#     if doubleOcheck(i):

#         pass
#     else:
#         o.append(i)

# print()
# print(o)
# print(len(o))

# print(deleted)


# {'pAofo', 'Aopof', 'foAop', 'oAfpo', 'pfoAo', 'foopA', 'ofoAp', 'poAof', 'Apfoo', 'pfooA', 'ofpAo', 'oAfop', 'Afpoo', 'Aofop', 'fApoo', 'fooAp', 'ofApo', 'oAopf', 'Aopfo', 'Aoopf', 'pAoof', 'fopoA', 'ofpoA', 'Afoop', 'fAoop', 'Afopo', 'foApo', 'fopAo', 'poofA', 'pfAoo', 'opofA', 'ooAfp', 'pofAo', 'oAofp', 'fpAoo', 'ofAop', 'fpooA', 'opfAo', 'opoAf', 'Aofpo', 'poAfo', 'oopAf', 'oopfA', 'oofpA', 'fAopo', 'oApfo', 'opAfo', 'oofAp', 'opAof', 'oApof', 'Apofo', 'pooAf', 'Apoof', 'Aoofp', 'ofopA', 'opfoA', 'ooApf', 'pAfoo', 'fpoAo', 'pofoA'}


# # ['Aofpo', 'foApo', 'oAopf', 'Aofop', 'oAofp', 'fpoAo', 'ofoAp', 'poAfo', 'Apofo', 'Afopo', 'opofA', 'fopAo', 'poAof', 'fAopo', 'foAop', 'fopoA', 'ofAop', 'ofpoA', 'opoAf', 'pfoAo', 'oAfop', 'Aopfo', 'pofoA', 'pAofo', 'Aopof', 'opfoA', 'oApof', 'pofAo', 'ofopA', 'opAof']30

# # ['opAfo', 'pooAf', 'Apoof', 'Apfoo', 'Afoop', 'oopAf', 'pAfoo', 'Afpoo', 'Aoopf', 'opfAo', 'oopfA', 'fAoop', 'ofpAo', 'oofpA', 'oofAp', 'fpooA', 'pAoof', 'oAfpo', 'fpAoo', 'ofApo', 'fApoo', 'Aoofp', 'fooAp', 'poofA', 'pfAoo', 'ooApf', 'oApfo', 'foopA', 'pfooA', 'ooAfp']


import numpy as np


a = np.array([1, 2, 3, 4]).reshape(2, 2)
b = np.array([5, 6, 0, 7]).reshape(2, 2)

result = [[0,0],[0,0]]
# render = [["",""],["",""]]

for i in range(len(a)):
    for j in range(len(b[0])):
        lst = []
        for k in range(len(b)):
            result[i][j] += a[i][k] * b[k][j]
            lst.append(f"{a[i][k]}*{b[k][j]}")
            # render[i][j] = " + ".join(lst)
    
print(np.array(result))
# print(np.array(render).reshape(2,2))
# temperatures = np.array([
#     29.3, 42.1, 18.8, 16.1, 38.0, 12.5,
#     12.6, 49.9, 38.6, 31.3, 9.2, 22.2
# ]).reshape(2, 2, 3)


a = np.array([1, 2, 3, 4]).reshape(2, 2)
b = np.array([5, 6, 0, 7]).reshape(2, 2)

# print(temperatures)
result = [0,0,0,0]
for i in range(2):
    for j in range(2):
        for k in range(2):
            print(a[i][k], b[k][j])



a = 'some'
b = a + "text"
print(a)
print(b)
print(id(a))
print(id(b))