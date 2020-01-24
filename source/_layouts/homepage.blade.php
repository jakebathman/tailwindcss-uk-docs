@extends('_layouts.master')

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@tailwindcss">
<meta name="twitter:title" content="Tailwind CSS - A utility-first CSS framework for rapidly building custom designs">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Documentation for the Tailwind CSS framework.' }}">
<meta name="twitter:image" content="https://tailwindcss.co.uk/img/twitter-large-card.png">
<meta name="twitter:creator" content="@tailwindcss">
<meta property="og:url" content="https://tailwindcss.co.uk/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Tailwind CSS - A utility-first CSS framework for rapidly building custom designs" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Documentation for the Tailwind CSS framework.' }}" />
<meta property="og:image" content="https://tailwindcss.co.uk/img/twitter-large-card.png" />
@endsection

@section('title', 'Tailwind CSS - A Utility-First CSS Framework for Rapidly Building Custom Designs')

@push('scripts')
<script src="{{ mix('/js/nav.js', 'assets/build') }}"></script>
@endpush

@section('body')

<div>
  <div id="header">
    <div class="bg-gray-100 pt-24 lg:pt-0">

      {{-- Top nav --}}
      <div class="fixed z-100 bg-gray-100 inset-x-0 top-0 border-b-2 border-gray-200 lg:border-b-0 lg:static flex items-center">
        <div class="w-full max-w-screen-xl relative mx-auto px-6">
          <div class="lg:border-b-2 lg:border-gray-200 h-24 flex flex-col justify-center">
            <div class="flex items-center -mx-6">

              {{-- Logo section --}}
              <div class="lg:w-1/4 xl:w-1/5 pl-6 pr-6">
                <div class="flex items-center">
                  <a href="/" class="block">
                    {{-- <img src="/img/logo.svg" class="h-6 w-auto hidden md:block" alt="Tailwind CSS"> --}}
                    <div class="h-10 hidden md:block">

                      <img id="image0" class="w-auto h-full float-left" x="0" y="0"
                      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                  AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                  B3RJTUUH5AEXFToPHlQX0QAAOqRJREFUeNrtfWecXMWd7ambOofpMN0TenKSNDPKWSCBMiKKDMZe
                  r43T4gfG8GxYA4YFG7x+sDhgY2ODCfaySzRJEkEBJZTzSJNzp+mcb6r3QcESktAozAxgnS/9u9X3
                  3grn/Kv+FS/BEOPqiSDjp9hNepPt8skzL1roLi27HIRJv/yfD04tqC29jNfp+75617Y3hjod53Fi
                  cEP14rtuh7amoKHcbMy/pX78tIudbuc4i4EIDDJk5yety1UTm5o6/7pbo6F+74+/su29R19EbqQL
                  458RQyaAsfuJjS0U7pk577LFbqfGISe7QXMiRMaEpJzomD5r0V3lnrz6hN1e4ikrrXjo291N9z9N
                  z1n89957L3ie17Asq7Xb7fF/+7d/ow8//DCy2SwefvjhYSncLwLYoXjpT78JIZ7HuWhn5OXW9j0f
                  MFpzrdXh9LT5ykl/ZBTt6AxWzr6wdL5Ao5zW5NaGIxGlo6V5+cc7zzzO++67T7N06dLZN910U/6c
                  OXN8RqPRPn369D+MHz/+x4qiKLW1tbvKy8unlpWVXTVhwoToBx98EBqpQv88YWhqABWkbPS4h+tH
                  T9McOND08baNa//S6VtUvviaO4tZhhLBUFowEH4dZYUsIA+QuoZpS3ZtWnkfkEqcSXQ/uPNuUlNT
                  8/25c+c+zPO8smrV6h+mkgm2trbuepstj2g02v/b39e1d+LESf9bXV3lqq6u3sCyzBJRlGKCILAM
                  w8h33nnniBIxUhgSAUhATpLo7yrGT3+3tr5oiaRISu9AJctxBNlMBhxLsb9JDouZcIdGLztt+dUF
                  hWVV1z3wzZ1/fvAZDKodePLJJw1ut/tqnuf1sVj8NYvFupjjOI1er0O+XX9j58CaXd3d9UimUvD7
                  OvLMfOttkjw3P51OEV7Q1LGsUDV27OjFLpdrbHt7+zM/+MEPVjzxxBPqSBMy3BiSJuDj7UClLRQu
                  LvVc4XJa3awSYZOZBPGF89REMkdCwV44dAfiB9asvePDj5Y/wSdza7zhroJMIrZ51TackoQ77rgD
                  NTU1t8+fP/+/6urqLu3t7TSHfVu6FZhmBIJhWPVdxVOnFk9OJQaYWKQP5UVpbX1jaX17e4iEImn0
                  tq315VId6uy519xbWVk5hmGYGc3Nza+tWbMmPtKEDDeGRAAAsGGvkrviIhdfVjtuIVGSJBqNbd2/
                  c0Wnw5ooKbXvQ2mJ1phf07jYSkxcx86Nm+Nh7xsKR+WVW0/+zgceeIAsXLjQqNVpWVue/ZbCoqLJ
                  LMsyYsY/fso4OsFuTvBWbRuK7DGGkfyMw+yH2xqAlgkTVg3D487ApAmhti7PqtHaZyVzZoYQIJFI
                  xtvb255bvHhxasaMGerq1atHmpdhw5AJAABqXMFYxehx12RzjPraX/9y3ejamgmN9aZRAqtClHhw
                  glmjGgxFgaQv7Q/2b3/gj8ie7F2PPPIIU1VV9b3Zs2c/WVhYPLe1af1zopheODAQNrpsPsZlTvC8
                  0glW7lFDvtZMT9eBzu6O1m3d7a17vH3tBwL9nXEx7dNZjTktS9PEahZIIJRAX18X3bF13c8bxs6Y
                  Xltbc2s6nQ6MGjWqe926dSPNzbBgyLqBAJDNRFr6Ow+8k8tlZX9rX7NzaVGFShy0tauZQPWhader
                  ClVyHTSbaWMtWt3//U4m8ovfH/+ee+65ByzLOisrK2+vrKqqzuWkcTHfe+4JY6IWQYhDS3uRCPXJ
                  Xe0dHX39vpc7OoIrVVXapapKaiCQUcCoMHKcxuQwVBbm229pmDj6+uKSqqLG8iwUzgU5q72pvr5h
                  TH6+neM4rsDv9y8BkBxpcoYDQyoARVSVdcvffNkoCJFR1SXTM1SxfrDiw90Gg7Z+xuwLGFZN8O4C
                  20UD/r7Zzk7v+q2f7Ps/P70ls+OnLxx0BB955BFQSt0lJSVTk8lkVzQaG+jv81bnRImtqKmbYTWG
                  oaTb4etvjeze1fTYlq0dfzObmZ67Hk+fwJGURSC249GvxXb1+wdemTB54P81jpswXWuiJN9dNDYY
                  DIDjCCRJMrAsy4w0McOFIW0C1u8BLinLtnOJlDchp/L7+jr+p37qnCuLS2pciqSCUZOQGBsEViRi
                  NutxFRQsEUVp1dsfJ30AcPnll5smTZr08rx5835UWFh4yaa1r72oyuEZULx8dUEANNeD5qYdfR8t
                  33Dzvt29Lz3yvBxdsUH6zDR9sBN0ej3t7e70rdQKaq3TYaoymTTo94toaWnr2blr//2hUKh93bp1
                  /xQjk0MqAABYvg+YNQ2QCO1rrJw8v2H2/H81mqxMX2crijxu9HU0A2BRUTuKuIvd5p6uzkjDzDv6
                  vvKVmxui0ai9qrr6LofDrmdY3sKq+6fMmGQ1uq0+omS66e5dmzZtXr/jlu6+yPpH/zq47iMArNqq
                  YEotjaRzydV6Hbmy0JWXV+xxIjLQGqyoWzC9vn7MTTNmzNj6xhtveEeUnWHAkDYBh3HvnwCA0vf+
                  ap4miSLn7WwGywtgBRuqakqQzSTQsm8Hcpk4IilBt3jxkperq8orm5tblu3fv+/vAL1ZEmPcmBqn
                  BdkuiOleumPz1pU7t7X8azSZ6HrsxdNP06Mvqfj3byV69+w6cI/L5XrOKTh0VNtYVVtTBUEQEIvF
                  7gDw1eEkYyQwLAIAgHu/Bj4RCZXGIwG4i9wgNAxf53oEAgHY7XlwOPRIJokqGBzVdru9hud5bUFB
                  wZKE928bivMoMegy0JN+JCI96uZNW1/eta31h/c8lTsrC33kDwr+/euBNysqOlbbXSWLGLUA7R3d
                  0Os0aiqV7BqushlJDJsAVBWy2axtMfCBhf62zSSZ08FTWoNCgwfZtIxsej+isaSUjoS27t21cc5A
                  QTnknF87feaUizi5F3KmD339HZFd2w88umd765P3P6uckzb6kWfVXH1D8O0xycj8huoYu3XfyuzK
                  XbFfiTL/9HCVzUhiyH2Aw5h92X0kGdwXHOjfOaq2rrKkqMhNslkZWc2N0NrmoqldQTbezl185den
                  5sKbdEXFWlLq8IGT25GMdij79+7Z8vGa3T/Yvbfv+UeeV6SzT9FRaasEVz6q+Aar1a1JSMVk4pTF
                  NR6PZ2F1dfWq5cuXh4erjEYCZ1wD/OQnPwGAY6ZW77vvPo1Op0MsFsvpdDre6XSWaTQaKRAI9Iwd
                  O/arxZ7rv7Vv97rwxnW/W1ZaYZ2TpaN0dTPKwTIqzI4GGKx9MOoNWrvNBDO2Q04klI7ujvbOLt+v
                  d+/s+J9gIBP41WuDd/YGi4yS7kjE4gFrLmvKyIWs3W535eXZnIWFhQsefPDB1gceeGAkuBkWnLEA
                  LBaLyWazXfD444/3RqPRPUVFxVXjxo39f8FgUDlw4MCdJSUll0yZMuWnXq83vWbNxw9UVVf/vKKs
                  zKXVGaTVb2/5g1ORpmZzOV1Xxx4QRo/IQA8KqtzoaNmFsuoGfPTaY1vETOLp9k7/snt+ne39rLR8
                  q7ycaFiW4SlVH29rO22ByByykiRmNLyKbMqPtvYuyFIuEQwGd6VSqZHmaEgxaAHcfffdjF6vN1ut
                  1rTX68X48eOfnjRp0nXNzS2hjRs3Xjt9+vRbR48edWkgEEAqlQqOHlNfXVhQaGcYxl5aUjB3wN/T
                  b7XkuWLRCF9cbP5e7fhGEvW1g+W3oD8yClOmXYymfdshZPZBpzfCVdzQ8c7rL7/wyLPqcW39ky4X
                  +g0GV346PUqrKDM1kUgdS4ieEuL/mcu1YY+qvpdWlIE3wv+ove8qLyUEhJepapQYliGqKkoMSf++
                  vVNmCCilisqyLOoqI8r77zz7u5ha8jefL7DhF7/4xUhzNKQYlACeeeYZ1m63f6e0tPTb3d09mwnD
                  PuJyuS/QaDSsze7INwqJS3s7tzpLS0sRjychpToaWnb1KjrtUgwMBOE09V5o5n18d1sIeiGD6VOK
                  SMDbAqerDK3NbahuuBZGowE2exGC7Sr6Og+gtNSxqLDAPR7o33g4HT+oqYFWlgtNkci105LJ79iy
                  2RJGVXUsQAiloISgmmG+Ua7VbdxvNP6ovqRkk8Sypc5MeowtmhjvVoQZDoUroVRlKBDv57HHMcHx
                  hzx7vjUj6617du+HrLQwNmNPadP6J7c/+gfpnDc3nzd8pgDuu+8+6PV6AHBNnDjxLpfLVcZy3Oie
                  1vfj7fvlLKXzEA4HMH2y/rt6fVrYu/t9QJEw76LCyToNiDewGjadiobJ+R4GWVC5A5BjEDMhtX1f
                  U8ZTNV5L1STb3b4FenMlurvbUeexIBPrRkF5vrG8quSyH93S/8ljL4DeVVlJHKlUQ3k8/vuiZHIq
                  oZQ5zI4CgIAAFCCKKpSlUhcaVOVlv1b79zxJvNyTpa4CxSDoKCEEKiiApEWF5ubqKe5Z7mvdVYUs
                  zys6gQc0Ak+kjE+fi8lfevKBzxDA/fffz9hstmkajcbg9wfbwuFoTKc3IpVKs3PmNN5RWaqnodBG
                  uIpEWEzECDUNt6UFAAVVZYbKMsrsKggVoaZFpFJxJJPxdH9vf3t/X+D51vbInvGzwy8WFJXa1PTb
                  6OqfjoaGuejtMSHd+xu43RZSWlF+o3HTzt/+S3VxvyWdXjQqHP6dLZMtJSDQQQs9eHBgwR3qzDA4
                  SG8GIpBJlTiz4m351AQjDADoMQsNNDkC1WlE4Wi7yW7iIGYTUKQswBkgZ6VOLkfFkSZnOHBSAYwd
                  O3bJpEmT/koI4Vd+tOz19u2/aJYy14xlZB8qS9IgmR7i0KUhZtM04k1JUi4nSbKUlURRoZRKsiLl
                  VFVNplPZcMAfDsTiibW5rLTB74+1USpH4zFZ27r7k00TZy1etO+TDXCXjoHL7UQ2J6EnWI0BfzeK
                  iwuLyquKLtS+EovVJ2J/zsspbhssMEAD/hDpJzJTIzRQQWGmWmjAH7qPQIYMFixYEChZGfJjq+HL
                  XwzdXD30ggnJTAyqqsFALNT3n2+cemHKlwEnFMDPfvYzGPSGGQWFhcZoJAqPp+j68aMWqjqmF1Ts
                  RToakHt7uv0Dwej7fn9oezyWbJNlKcJxXJRVqSwSVcxlRElR1Ww0JmfFrCKaLKycTUv0Z385GMe/
                  fw2Zns4DLzROvXieTstzof4NYHg7ero7odPEMeDvRKGnRCgwlTxqja81FIisIx954MCAgkCBCgYE
                  wEHLp6CgABROha+CgaNdC14WQABkIcOHKBKQYAQPwa6BjgooCZvhfeADdFsvQcUkFzQ6CxRJhJSR
                  YyNNzHDhOAE88cQTegDF/kDgjX27d92ckxSPSRsjOvSz2Wg7ujpaO7u6vI/v3NmxnFKpLZWQlcde
                  GkxUxxrUI38B7ue2rKqfsKO1pKyqLr3rf9Gzz4vSUd9EPPY1eA/8BvFoCFVTKkt9ts0o9JmPkAxQ
                  JJDFAJIgIDCChxk66KFBcLQWmueuQeC1vTA9tQ1MWIIfcYhQkYGKPuTAagk8358B/mdbUTpgxL4H
                  P0LomWvhchmgKDJVc7kvd9/vKBwzEvjggw8ap0+f/uLkyZN/Fgn7PUay1lBSRPM9tm7EBvYpmzd+
                  8rfduzu+JkvSitsfC4dWblHput1nHvnq7XLikjlWV21t1WxfXzc0eReirn4OOF5ALN6LZOB9VI6Z
                  hEB7D2w7s6A46OwREOghQAALL9LogQiKLHjCIHPDaNjGa2CY4ERsZjlyG1rhiZlghxFWCNBBRpgD
                  PD+8GJmxTsjrWpHfT7EjHYRrVikYmlN37Gx58e018X0jTc5w4BgBLFy4sG7+/Pk/t9lsJlVl62xW
                  JT/fFEQ0sEvctGHrk5s/abmT17ID33koeNoR3VtSwk91Oi2zLRbbTKvVdpHZZLnAmucKenvksvH2
                  y5yufKGjrQPQ1sLnC0FJroDTsBmCdgxyTg7M3ztAJYosJKSRRQwZiJDBQUEaFCIoVFYE+do4uGqc
                  YKQ4DHYB0UY3NCt7IGQINOBhhh5GVoU6twjOCXkITylEtsWH+PYehCaMhaxpUHyholVjp8zfvmbN
                  mi99T+CYJiAcDgc6Ozs73QWFdeGQj/FUxJGJt9Adm3e8tG3ngQce/LOaAaKDfvl9paVEUJR8syTO
                  z4tGLxcordLKsoUFtCxVCUPBUR9let/erZn8nYVwGt6AHPhXCIanYCq7Hb4uikz7bhQ31GP91PUw
                  Ug2yW3tBE8qR9VqFAAwA4gBUBmAEBoQBWE4PORNG0QQXei62w7ItBjlfD9OuCBw5PcJRBgatBpWT
                  CxH43QIof++Hq+7bGN1Yz5uLeh5Y9t67WwBsHXRmv6A4IoC7776bLS8r49evX//NqqLEExPGV0w1
                  8l4cONDasXt3x0MPPq2mB/vS2woLYdbrNc54/IbiZPLOwpxab1RYhgUBwIICSIMid9BuEX1tL9Lf
                  vBAWWx1iGRmjJ49FJp1A64FpYNTn0d+VxuhHb4AYpQgs/T2IhsIkqwgqQDMALQAdACgUuUAShDDg
                  NEbkMiGwYgLMjfUgt1ugMxOEPgnAcO9q5HxRsJwHAs+h1CMgc0UVdGYjMpk08izmfIvVOgr/LAJ4
                  4oknUFpa+tUJ48c/6vX7wSmb9c68NNIDAezb2/J8MpAa9Nz47dXVMORyrrpg8ElPMnV1sWLgzDAe
                  8tcBHGnJAREy0hDBN2fQu7EFnom16Nm+ApvX/BF6rg9l1m64XFPAsxJUqqDt3b1oSOWh6UoL0h1+
                  FO+MQgTgB1AFQOUYxJftRWpJJfLMZrCcDlSR4PCw0AlJMFDBTTHAf0Up1O4gZFUFrypIZNKQ0wm0
                  t+5HKpVBODywu6+3959iWTAHAMlkkisrK7ux2OPJZ1gObS29oGIrAqFgKtcefvWhlwc/A2cRRUdN
                  NPp8eSIx30h1xALDUd77YRy85sHCAh3ssh57X9oOf1k+9PpRsJu2wm7LA8+7wTIsQHQIxWLQbgtB
                  ZSi0S+ph8tYit/sdFKsKwgBSE5xw334RTGYV6UQSZoMegtaMdMIHo84MhdVDw/GAGAEd60Jy5X6k
                  0klkWT2aP/SjbWMTLnu0BtvWv5LYsif1rRwzqmOkyRkOcACQTqeV3t7e5Xl5eTMGBsJakz7DQs0g
                  k0j4vXJ20Ktu/k9VFVMaCt1TlkzOUyklBwdhCD49XEMAKIdEQAjgrSYwXDMbBsGAolo7tOYSCBo7
                  xFQ3FCkMqCoyWQX6lgRCRSyso2xIl8QBpw6sPwmTwKDwthmonOaCRtBBVVUQAvCCAQxhkMhwaHvv
                  AKourYbNYkU2G4QykIPEWvDxkyvg++tujP7xYuTpskB2r8zG9kQe/u0rI83NsIABAEopTSaTv/rw
                  o9VX7/3kqd/UViiKqirIprIDNEUH3fYXS1K9J5X6GlFVhgBIIHNo5P0g6RnkMIAEuhFGB4IYQBwi
                  JPCiCuJPQgUFpTJY5qBrwgk2AICiSFADCtj+OJI3jYLFZoKrtADq7BoQAEYDC2OBHgKnASEE0XgS
                  /f44srksOI0Z8XgGbe/uQNfmLlBQpDI5tPUnse7n72HgzzvAWLUYc9kURAK9YBhKdDotP9LEDBcY
                  AHj00UeRy+XmTJww9tGimiuWRiJgCAF4QqiTDG6J/JX5+cQSjd5mlCT7YXuXIEOFAgkyujCAboQQ
                  RRo6sCiFHW5YITACLL0K3PesQ9/330B7UwjB0D6ImX4wnAEMqwcIQEUFA9VamC+vhclaAoPODiwo
                  gCQw0KZkDLRFoFAVkpRDaH8Su370LlrbQhgIG+AoqMfiP30fbduaEUvLKLvIA9msQfRvu6GyBKPv
                  WAhXgQYtB/bDZDZCFpWR5mXYwAHAfffdxzc0NPywoaFhnNebj662dXBWMmA0nCtqoEYAmVO9iKco
                  LsllLwMlYMGAAQML9GBA0YswUpCRBx3yYTk0nAsAFAmNiP5vV0Nd1QPtJi+M33gH/f/aiMyNIlz2
                  DMDa4A8lodqsMP1sEZwuGwStE1CyKBhfjuY6N7S7+tH0pw0oHO1AcZENciYJo8eKuvHToaaCCIea
                  4Q2EofgFLLtzOawVeYCsQs0XUH7rBZh50wy07t0EllVACIGg5f8p5gGAQwNBkydPZhwOx9z8/PyG
                  gVCYKqKfFDiyENNBzZ79Xa9+sEk8qR/wgKeEu8CWN2lcLntnSSp1gY2aiBtWWKEHq+fQtsCMYCgD
                  fVZGMWxHZu6Ag72AbjmCzAQXPPdeAFpVCDmRgvHDTnizImi1HVHlImgdC9AdYODKj8JkEJAa2IF0
                  ohOcRkAwngM29CLkz0ENRuC4qAppKmLX/+xCSheExsKBUBmllTVoXHox9CUOyBKDghljMPnuSzBm
                  TjXa9m5AIhGEXq9FIpVSVMXUctkca958zUDHuy0jTdEwCGDDhg1qY2PjhmAwEGg/sOPj8qLAKIfD
                  bmIR5oIBb1OlK7Zp3a7jH/6P4uL8wlTyZ42x2ONView0mSokBxkW6MGBRWy0AXlPXQnt3DJE4ilY
                  2hPQqAebVwKgB1F0QYTRn4Hj2nq4xznAL6qGdGkd2BIDRK4CRVWXwWjQISvxCPTtRp4pAoUQ8JwW
                  HAGYwkL43tyNaFZBJiLDfcUYDHSE0PfSXpTMm47R02rQtGsL/H3tSIS8MDt4FDW4YXRTpGOdaNm7
                  GZlMGjpjPkRqQln1FL66rmIh5FRx//a2v73X+uWeFTxijhdccEFKEITuaTNn303Zitq+/gjrcaaJ
                  mI0XdXYGXl+9VT5ms+RdpaWexkjkrckJ9YoSyaSxwUQEcEgiiwxEmKFBZK4LeReXo6AgD4ZZHvTm
                  4jDuioBXOahQ0YEEkqDIj2eRrDDD1VgNh3MsrHlm2Jx5kHIxxLLFUBQG/X09cNjT2PD0+2j/qAsD
                  AxkonABjgQEHOiLIHRhAjlWRMTBo+802WGeU4aK7lqLrwBYo0haYjf0ADSAR6UDI3wJ/XwSEt8JR
                  UIuS6okw6TSgsh+B3o1k384Nme3bmu9NidLeVV/yGYEjAli1ahW+973vfXXK5CnfMRqMbEd3FI68
                  JPJMii2TjrbVkPC2NYeqw7srKviaSORXE5LqIge1EOZQmy6Ahx48cpCRRQ7yokrkTSyCyeSBQOPA
                  aAc6tzQjE4lDbMxDP5dDMikjnwKixMEwtwh6QUAm3oFcuh+UZpFMxxEOdsJtakJJIYv+Pd3oemod
                  oqs60fluK4KtITCFGqR3BMCIKuLbvLDO8WDRY99GLtGBvq5VMBn6IUoyMlkOjKYKDvc0FFSMg0lH
                  EA8dgK/rY4SCLSBIg+Us0GkLeIOPV0yTHO+8+nbwS+0RHjMZNGvWrDy32700m8vxAX9LpqpCz2lY
                  kdWy0lh/NLihsSLbu3YXcIVOP2VcIvlYETXxHGWP6eXz4GCGFgZoEJuRh7zJJdCbyqDKUWi1DHpU
                  CcqMYjjungTD3HIMRFLgmiPgQ3EoM0qgNQxAEeNQWSN2v9+JyIF2XLi4EDomDNAciiaPgz8cRrzN
                  DxKXkG0eQHJPAFTLQjsmH3U/nI95P7oFUqoTTbvehUEXQSJbBXfZ9XAWzIJOa0bItw99bSsRDXdD
                  okZYrRYYDC5ksgxSCYqSl2UyepWlVi4wpWfe6Nj45rv9X9pJoWMEMG7cuI7+/v4dPT1929KxvpTW
                  WDMmHMuQMg9rYTjxonAksmLhdHvEHGbvKr9x4qxoKgzZFwNHWPCEhXJoORYP7mC/v94O08xC6A1F
                  oFQCUdLQFhnhbnAi32pDns0IocaKre+3QAyLUM1GuGeWgec1aN8XwfYfLYOUkVF/3YVo3bcN7a0H
                  YDKwGHf1Argvmwx9vRv6KUXwLJ2CaT++GtP+bTFcFUbs2rQcPd29cBePQXHlpTCaCxHx70J32yqk
                  Es3QaPSw5hUhyV2FyokPwte7HWrOD8qaULSiAIZUJUJ5Ji6aDSnpSunlV9/u+9L6AccI4OOPP6bj
                  xo1rsdnyNJdfcdMDTle5pssLmHQSPAU6G1Wys635tZPqr2u4Kf/iak3f6gOwtmYhOnmkBRED2SiM
                  0IIDA4YQJJJBZC4qgC3PCYa3QpUi4FkKnUYLRVXBcQIELY+OTb1IdMYQCcVQuGAUFKJi7X3vg7bE
                  IJTbMPbaqejv2oeyUjeC3i50t+yDTifDM64EnnElsBTwCPn3oWPfLoQGkiitbECxpxCpaBf6O1ci
                  2L8TqpSGTnCBMC7kMioYloMoUwQCcZjYPYhGB8CCQ8ScRnCgE+G9B2jYGXvGOJZ8/NfX/CPN05Dh
                  uBVBP//5z/GHP/xBkWRJphkKWczlRKojsRAvFJRNajAZSIPRaEBWyYG3GmBEHIlCPdqv8iDvkfXQ
                  SBwIAXovNkH77akgYBENNcNeMBUMZwIr5zAQzCIxkEBBhRmEKtBZNcgAUPpT6NnghaHYiswWPxiO
                  oGTJOOTSMRDCwGorBMvIUBQZifgAepu6kEyJUBkbCjzVKCo3IznQit7WN6HISWh1FsiSCSpXgt0J
                  Cq+tBDHBDme2FRfE/HDm9yCazkDmG5HvlkGVHEStCLGYAxbmy4GmA93ed5pHmqMhxQn3Bk6dOtWb
                  TqcTXq9X6O5ofyzd84rZ7jRXOGwCzI4GMKwAKRuDd3MnbDvioBYBhY9dC39/J/KbcsgaKLKPX4jS
                  CdVwuqtAQCHLWQhaO8SsD22burDt3uUQJrjhcBkQy8jwr+wAJ1NEwwMItXuhtsShm1GK+Q/chM6m
                  tSguKYVGqwOogngsDEkRIJgrUFIxFpY8PYK9m+HvWY14ioLTVsNqtiCT5dCdsuLxPRzWuopRXjML
                  VmcJVjW3Y6ISQJ7NgKC8BEU11yDu+xhaIQeO58CDIJMT0z5v4vVYPNVSNfEb6s4d20aaq+ETwEcf
                  faQ2NDRs6ujoeEG76Wc7FC6T9lTmz3QWjTeBtQFUgZILon+/H4b1fqhOPdRL8mGY5EFmtw9MNgf5
                  q1UoLGxEOrIfbft7EGjuAtGlEQzGwOUXIn9ODbb9fh3yGgpQOLYU3YEeKE1xqKEscj1x6GeVYPFT
                  3wGyPUjEwigqKUEwMIBYigHRe2Cx5iOV6MbuTcsQj7ZBkQnsjkrAdhcsxVciHVoDSGn89x4VnQkO
                  nMCitacNvTu24UpNElVOBoKGByN3YqBvIzSkFyrVQKYmWJ018JTXaAxW3eKAOLdHVAS1qKgo1NTU
                  9KVzBk+6O3jlypVYu3Ytlu0X6YSiVFPaF1onWJlJeS6PixAtoWIA0bAMadkBKNVmmK4eDZtRQLzW
                  CWVFC6TRDphL8kCgwLvDi6ZnP4Z9ziQUltTCpFMR9Lei9Y9b0fXmfrQuP4Dsdj+gEnDVFoz6wQIs
                  evBfkYu3o715N6x2N9JZHpzBAZ5k4O3ahL071oJlCVT9TBSUzQCkMAhVEYuHEA8fgFnogaKosGl5
                  RDPAGE7CfE0UVxblUGaRoDdokM7kQCmB0cDB4a5GvqsQBFkoCo9IXI+Cihs0s+befOmYMaNvkiQp
                  XFRUtHX79u0jzdnwCOAYMexRMdEQ700EelfCQBvzCypKqJQmClER+/susDM8yLugGEadEayVIGIz
                  Iv38FkhTHDAaGKh6Cn88hlHTqtHfsR1SLoGisnrYpowB7zSCtepQOHsMRn3rYkz94RUoG1uInRve
                  QW93PyrrpsBgcSId7UDHgQ/Run8XzLZKRJmFWNn/daz1XYi/rwvgqgmdCEfisFtSIHwJJKYYAumH
                  mRcxya2iMV9GoUWGXsNBIXoYrRWwOjxwugsgZqLI5DSQSDXMBVfAXXktXKUXQ2ssBEBZo9GoUxmm
                  6mXKvJ6+4/8mMy8+N9K8Da8AAOCjNuDNTdlQXX73cpamRxVUjKnqC/tJX68A7uIiVNS5AFDwDAFf
                  akJvpw/BZ7aAn1wJm8uIna/vRUKUMHpaPbw93YASh91jQtWsMaieNwGe8QXgDGn0tOxEe2sXymvG
                  o7jEA3/PFrTtex9+fwj6/NlozV2Pt9puwTr/xWiOmyHJCWxqY3FBWQdYyQtOMEAxfQU6cw2Q3gCd
                  jgBQISs8DNZy5BfWwGq3IpsMI57kwOinIM+zFI7SK2C0N4LX2pFO5xCLxQBKoagqQCkCiaTzeZa/
                  gWj4EsNNN3clX3xhYKTJOxcgp/vAQ/8CcDqzuWLs7KdmLP7lzVqzC3u3r0WZaRl0Rh2SqRwyiTQo
                  r8XaH7wE23QPJt5yId699W+44pk7wbC9SKZZOFxVCPlakU11IZvOIJ7MwpJXiqLScogZH3xdn4Bl
                  EsiKJpQ1fhUfN5Vhq38K9vp4eONhBGJpiDLBRaP1ONARwuKyVfjm1DWIJnKgbD7SmSx0fBYMlwd3
                  cQU4kkEqmUQsqYXDswCOwknQGfOhqhSiKKK5uRnvvfceQqEQampqMHPmTDidTsiyDN/AAH57oAUr
                  zNaDU9McJ4JlXoOqPCTksk3dl1460jwOnwAO48UX/3rrNVcvfVqWJdLa1o2epj/D99LfkdwbApPJ
                  HnxzIgt+XB4IDHDPrML82y/Bzo3LMHb6zeAFA0Q5C2/HRvC8AXqDDpFAE0LB/dDrDZA0F8EsBCGg
                  H6xpCp5dU4cDmaVIZNuxpTOFQgsDgWZA0t2YWrwfC6u2wqoNIR7Pwmr3QGdywOGwIx7qQypnhNYy
                  Aa7SC2GwlABgIIoiZFkGpRSEEHi9XqxevRrFxcXwlJQgkkigJRJFWyqF7SDYb7JAYQ9NYxMAhIBw
                  bIyy7K8hS4/75s+PjDSZwyqARx99dObSpUvfEgTB0tnZQmqKtpGEN4KdL6yCd8V+qOEkVJWCLzSg
                  4uYLMefbC9CyayXsNgvMronw+4LQagl4QUWkbydisU44890oKKpFMGKDaLoV3vZ3UOdYhtZeAtmy
                  GP+1+hq47SI+2bsbNjRjdtkeTC/eA4FJIxLNobi8ERabDTpORn+/H7xpHGyFF8GYVwVF5RAI+JHL
                  5VBeXg5VVSFJEtLpNNKZDKLxOJp6+9ChqGjKiehlOQSNJsgcC5VhcGjz8T9K7PAvQwCe30ZV5Xus
                  LH/Sv3DRSHM6PAL4/ve/z1ZXV19otdonxttfqJ8+jbu5sqaB01lciMdFxL0JKLIMc5EZGlbEgV0b
                  ADULq70SvMEJPS+iv2s7JDUBo6UePMNBFePQ6LRwFRWhtdcGRm6Dw+hHKJSBuWgenl5Zi1i4BZPd
                  21BhboYoSkhkOIxunA5BoyCbiiIQpCiouhouz3ToTfloamrCq6++ioGBAUyYMAFz585FLpdDMplE
                  MBbH7kAAe0QF+ynBgFaHjFYLlRCA0GNL6GQCOBzOcymw7B2qmHk2OH/xF2YC6YwFAAAPPfQQDAYT
                  5G0/1nnGuJ4oqPB8S683EoPBDJ4XQKmKaCSAdCoBndGBAk89eCaD3u4doJBRVDYTiXACrd5+vNuS
                  RjjF4Io6DjPqnHC4CuFNXwi/rx9FmlfhTxXDaQGCffuQyqggvAU1o8Ygk/IjGZeRUStQ2Xg9rI4q
                  AOyRKr6vrw9r165FUVERPCUlaO73Ym8kit1ZGS1aPeI6HWSWO1StHyb5NMk/fM0yKjjuN1TK/Tgw
                  b9EpV1F9HnBWAjgaP/8enzeqrvql0trihaqkMiBANpsDK9jgdFdCp2PR37EBoqpF1ZiZAJOPrVuW
                  YSNjw2ZqhjeagLjNj3GWNH66uAD5ReVoC1+AbCoMj/41tHf0gzJm6E0OeEoKEfR1QEEhGN1YlNYt
                  AYUAluMhyzJUVYUoikilUojF42ju60dLOottsSSazXlICgKUw6QfVQr0yPUZCOAfTYJKBP5/5Fzu
                  2wPzFn3uvz9wzgQAAL/8lja/dlL1c4WF+YtTGRbusrEwm3h0N68FQRKCZQaMzlnwFGmxddVf8aec
                  EeMnX4fdvU3Y+MlGWHqj+PoYFbMbi1BQWIBQOIr+nk5QxgiT1QGzgUNXRweM9lmQuFHIUTf6+3sR
                  iYRRW1uLmpoapNNpRKNRBCJRbPIPYHtWRLOgR0Krg8KyR5F8MjLP0PqPFg8hlArcMlUUbxiYu/hz
                  LYJzKoD/+AZhy0ZPuHXClGm/ynOY+P6OT5BKdKK4sBJGSxkGmO8jHImhvtqHls1v4vn+BD6RLdAF
                  I5hvEjGn0ozS8lHg4Edfjxec1oY8Wx6olERvfxz5pVfCXjQNVnsJvN5+vPLKK+jr68cNN9wAo9EI
                  r9+PA8EQ1sfT2AUOYaMZCsf9g7Cjc3s0ceSonQuEHlMqlOCE5B/575hwetQzBBD45RClGwMXL/zc
                  9hDOqQB+dzlvn/zdpe8JfLbW37fNZHe4CcvZYTJqIPAMYsp4pHIsRtcVQpJU7N+2Ar5YEg6zEflO
                  N3idDtFQH3hOA7vdglg0hFjahMKq6+AsHAuW0yKXy0GSJIiiiH379oFhWQwkktgcSWBzTkanwQKR
                  F0AJGQRhnw4/e+s/JpwhAM+tgCTfFLho4bB9pcywfhnhterF0QmXfHiqe8+pAP5zPmF0k5ylGVFa
                  PG16468ZCIwkiiAsi1w2hcbGakTVWYiLFagsDkKn45BJBhHo3YdcNgFO0MOeZ0QwGAARxsBZuhA2
                  Vx0UBUecOlEUkUgkEI3FsLenD2sTGWylAiIGIxSG+Yf1UYqDp0YdTNuwVP0niochFDz3PpXE64Nz
                  FkeHgvBPI2//yqVQ1LLImLmPn+recyqAw/jzw6NGzVpr+cQa1JuyteXomxAHVzOA0hIHelKXIq1W
                  orxwH7IDe+H3dsBZUA6riUVXZxfMrgUg+vFgBTu8Xi98Ph8aGhpgsVgQiUQQjcexubMHqzKKsp/T
                  dSZ0hvXg+T2gaoBSmgEDLRjGRWW5lrDMRFA6iqqKcGR34nBZ/zFNDAEVuBWQ5OuCsxcO2fEz1o1v
                  AlphOsMLb6mKsjjauGDzqZ4ZksOidVSbMUhuKWXPR+f+faALGOTr9FBUCo/5Y/gCH6Btmx+esjEo
                  KS9BwBsA0V6O6ql3wGApxKqVK/Haa8/Cbrfjqquugqqq2Ll3Hz72BrFeJJE+QfdSWq99FoTZ2XP1
                  3JP2uT2vvgeV40ogCNcTqt5KFaUaVD2p9Q4J+Ti0FVaSF4DnXnWuXnZTcPaiwFCUO9FqZoCQN6mq
                  9BNZ2juoZ4YiIS//arrJckD/IN71/YtmiTWPncPAbjVBUUSIihEGaxEMehXhgSxUYRxqx98EXmM5
                  0r5HIhGsXr0ajY2N8EeiWNkXwHqVzwQM1udFhvm5JEvd3hsXDXpufvzvfw9fcbWFsNx3oMg/hqpY
                  gdO3/pM3I3QQ/gUONk0cuxkMuTE4bW7buSpv1/LniVhYeAlU5VkoqhMC97AmL32fr+iKUz47JAIA
                  gL/8ejKn2Re9SFun+y+Xx1KmUJ0+v2gUrGYBXm8AmryLUFixEBpdHnI5EZIkgVKKdDqNcDiMtn4f
                  XecbIOsUDn6zo0Pl+W9TSfmw5/qLz3iBpvvNZWAEzQQCPEMVeRyllAy59R/nEwCEFzpUqn6dqOKa
                  4MxLzmqRiXXbewLh+duhqvdBlk3gWYkqan10/OJBrWUbMgEAwBszQVonWafNWnTp2xU1lbZwXzdU
                  7WQUVCyBzuiC1+uFRqOBRqNBOp1GJBKB3+/P7W7vXPuCxnFhWKPnqUa3VpWlm3qvm9tzrtJV8Nb7
                  DiIIT1NZXPrpJuGcOH6nqjEAUJ5Ng2GeoIryWGjGgjP6ZG7ejuX1hGV/SWV5IdRD+eC5dyFJl0Um
                  LBmUoQypAADg4R9U1l144cQ1Ntdkp6NsKVo7/NizezeCwQCmT5+Ouro6xGIx9PX1JXp7e1/ZuXPn
                  c29Ou2yUwjK/Ixz3piqKX+29Yd4ZFdBnwfX2CoHVCE9QSfoeqHqkNIbU+j8dzgDguG4weJxK8v9I
                  jOqNT7vkM9Nt37aCowyZBEK+C6peT2VZc+T9HCsDZHFk7IIPBlsOQyqAr3zlK2T2nIu+s3jRvP9y
                  uQqEdDqDt956C9u2bcONN94Iq9WK3t7edFtb28ZAIPBgb2/vxrcuuEomPP8mGAZUlr7Sc93cIfOa
                  C956j4dG+0so8m04eID0kFv/Cf0OQig4NkwZZjNUZS04dg9yYh8YxCkoQxliJTxfDlWdDIZcDErr
                  oCgaelQ396D18x8xSm5BaNylg56MGtJPxjAMYxrb2HCr0+kWEokkKKWYMWMGKioqIEmSuHHjxg1N
                  TU2/9/l87/A8n3j66afhmX21HRxnUHK5a/uuHzryAcB72WLJ/dayu4lWAyjybVDV0/pe4D9GDz/1
                  x6muP33iDqWEyrIdwCKwzCLIMsASBYSRCAEBpTwUhYFKAeXY8Y0jYNkMVOWh0yEfGGIBiKJIU6lU
                  KpPJgFKKXC6HeDxOfT5fV0tLy8MtLS0vP/PMM8d+oZPSKkjSbX3Xzx2WkTPfZYtE93vL7ya8QKHI
                  tx9pS4FTWv/JiD6ZMAZVW/wjfhZEYY/Er+Dk6WIIwDIvSpL88enmf0gFIAhCYuvWrY+YzeZnOY6z
                  eL3e2L59+17t7u5+DEDPM888c9wzjFbd3HXlvGHdiuVbvFB0LVtxNyMIDJWk20BVApx7x+/QHYNO
                  Fz1J6DHpAgCea6GS9JPk+EtOu9yG3AlctGgRY7PZ6uvr622yLPe2tbV1/eUvfzmnH306V3C9u4xn
                  tJpfUln+N1CVHRLH71O1x6mHqE8RP89mASyONC5cdSZ5HnIBfNHgWr5cYDj+IaoqP6RUPVhDnotu
                  3+E65XQEcyryOVYCx95FM9lfRSed2cLUf5qPJA8W/oULRTGT/nfKsXcSjjvue0VnMmpzRuQf/5Zj
                  L1lGBcs+Jonsr8+U/KOjPo9Pwf3uuwQG/WKqKn+CIrsPE3DG1n8uq36OlcBxD6rZ3GOxiZfIZ5PP
                  8wI4BVyrPhpFCJ6iinwhVVXmhISd66r/uHD6j3g4LgaW+QGy4vORSZec9eLT8wIYBFwfLdeD42+j
                  oD+BLJmO/DGcjh/DUPDcdhDynUj93FNO8w4W5wVwGnCuXFFBBP6nRFGupYqiBejQWz8DgGMDlGV+
                  oUryU7Hx53a18XkBnCacq5azhGHGgOO+C0W5mlLVeWQuATg31k8AsKwKhrQRlrxAKZ6WVTUQH7fg
                  nOfnvADOEIZnn4G+wlMEjlsIhlwBVZ0KUBvUgwchHnTZ6Il9hUPX//iPHGrf2RxAA2DZ1SD4Xyor
                  ayITFkSHMh8jKoDilz8AKCUEB7/6CYZhkQXASICGKBSHCoZSCoWi//rP57Yr88Z3IShcHlFpPQR+
                  AlWUMWBILQiKoKo2QNUB4ClDGFCqgBAJDEmDZYJQaS8l2A+W2U1laRuhdH948uLkWSdqkBhWAXj+
                  9yMeiloBlm0kLFtPZamWcGwJAKdKqQWgmiOpIpDAkDgYMkBluZdw7AEATVSWdyqc0uy77Iux86bg
                  4w8ZUc1qwTE8BWUJhUxAJYHJy/bPmDHiJ44MuQCK/vaBgWXZyQCWgpD5AC2hqqo7WCF+Vt+aHr+c
                  igCEZbMU8IGQNZQhb1CqrAbJhb2XXHI6yTqPQxgSARQ/9yGIgDyG424G6DeoqtaDqtypV+Ye/h3E
                  oAshB5dcM0w3YZn/plT9A1WVDu+S+SNuVV8knHMBlPztQ56w/FegKvdRqpYf9pBPd+DjZLt4ThjO
                  EBCWjVOO/QuVxUe8l8z/8h7sd45xTgVQ+t+rR4Pgt1SRZx+eUv2sZVbAGVr/ycIJAeHZAQr8OyTl
                  Oe+l8/8pPgB9NjgnAvC88CHDcNxSEPoUlWXnYPu+p03+p8OO60MfipdlFLDse4Tgtv75F3eNZAF/
                  3nHWAvD85QOG0Wm+B1n+T6rK2mPe+ll9X5xoyvPkVf+R+z8z/Jh1dgDPdVBV/Tql6mr/onM/iPJl
                  wFlPB7NazR2Q5cepqhxP/tE3nmx51D9Cjr0c7GzbSZdpUVBJKgdD3mEE4ea8V189P+h1ApxxoXie
                  WwFWo/kGpepTVFWEczHjddbW/6nnDzcZhGNFyrD3I5n+pe+KJV+Y41uGA2dcA7ACP4VS+iRVDpH/
                  KZxeX+wcWf9Rzx/tL1BFEaDI/wGj9sH8d94Z9NmI/ww4IwGUvvhhHhjmT1SRDTglOcf+nt4qmKNw
                  0smT41fonrDXQVUeqnoP0Wnvz1+2bEgXw54Mxm2vf+6aodMWgPU3KwlhuQeoLNcfDDl76z+hr3AK
                  YZw0js8oYqqqDFT1PqIRHnC9++6wisC29f0KXtJOGs44B4PTFoAlj06hVP0mpfTk1s4yAMMcHKkj
                  hB68ZkEZcuL7T3eZ1ckcv88YczgSrqoEqnIP9NqHXMuHRwS2Te+ZoeF/SximczjiOx2cVgF4XviA
                  IYS5nyqy4WDIUXbIsjJhSBclWAfgExCmHXIuBgoKjjeCkGJQNBKGmUYprQdVTKDqqav+E+Csx3pV
                  lQVwN7QCzX//7fsD809vN83pwLZpmRE890dIClFVNTxU8ZwpTksADGFmUtD5x7S9HCcThrxHKf2d
                  qqire26c+5nfGi54dQXDErYCHHcLqPpdqIoTdPA9iLOy/qN/qcJBYe6BRsc4Plx2/8DcRed8r4L9
                  k2V6cOzTVFGuA8N8Nzr183eA5KDtr+zZFQRazatUlq6iBAfH3zl2Ayi9W0Jgff/115+2YRa9/r6T
                  cPwDUJRbD3YlMXhn8USjjScYdDrl7h6GAQT+WVXM3T5w0aJztgvZvuldO3jNC1SSFoNlk6oiV0Wn
                  LP7czVEMWgClL35YAYbdRxVZA47NEIb8F6Xyf3TfMO+s5uWLXv+QAYNLCSFPU0V2AyNymhcFx60l
                  LPmmGI00Ry65+ozzY1n/DuF02qmg9I+Q5fpDx8j+d3j8vBvPppyGCoNzAl9+GYTjboKqaMBzEcKy
                  XxfFzE/OlnwA6Ltqrtp3xdy/g2HmE0HYc5wkz3XVf4LnQSmBLF1AVbqGs+Z9y7HmfcOZ5MW++YN8
                  Tqd9BIqyHJJUTykFWEYEpX8823IaKgyqBih54X0d4fh1ACooIdd03zB70AcQnA4K3/rIQwh5jSry
                  JOBkE0pDfKQLywAsuw2E/l6VlFdDsxd+puNW8s47SDmECgjcLVDkb0FRCkGPGtUU+I9pTpwbmXbJ
                  53I/5KAEUPbSR+Mpx38Iql6jSuJHPbfMH7IEFbyxwk54/k0o8syjRTCkZ/mdyO842I1Ng2G2UIKN
                  YEgrJClAVVUkLCNA4F2UKqNByAWgtAGKwh+XXo6VASwJT1ywYsgK7CwxKAGU/veaO8Cy4a5rZz4/
                  HIkq+PsHTsIyr0NVZh5jTWcjgMPkHxeOY8NPMB9BGXJ4voKCgAIgOHy81Ml6MAQAz7+JXO7a8LQl
                  n0vrBwbpA1BZapZjyReHK1Hey+cFqapeQ1j2k3PW9uPk4Z91fWhVMkDVg74CpQwoJZTSE5J/5Jfj
                  ElRRfvx5Jh8YpAC6C8m7fd9cOKyHNngvm+ejVF4Kjtt8InJONnx84vATr0U85ZjDEZzmoQ4soxKG
                  PMBSZf9wltmZ4HM3OfFpuN9+30k49jUo8qzjfYJP5eJMHb8zGXM4WfyEADz7mixmro9Pvfysdu4O
                  Bz735wP4Lp0fhCRdRXh+GQih56Tbd9TvoK1/EE0GPXhE/CdUUb/7RSAf+AIIAAC8ly0coLJ0PRGE
                  58Awpz3ieOaHOuDUK5mOdiIFYTcU5YbIpIVDchbwUOBz3wQcDffy9zkw7A8J6IPHHJA40lU/Q0AF
                  YRuV5Msjkxf0jXQ5nQ6+EDXAYfgWzpfZXPoXFFhCBP4AyFH6Pc4yh8nxYxkFAvcKVeQFkfbIF4r8
                  E2b7iwL3hx+6CWF+QlXl61RV9MflaKitnyEAxwXBkP9QZekPkcmLjjtP6IuAL6wAAMC5YgVheH4K
                  gJ+CqvOgyIdO9Rri07w4TgTHvEIl+f5wR7QN118/0kVxxvhCC+AwSp58kuQa6qcSlvkeVdXLQFUr
                  VZXBWf9x5OPE1n9wlVOIsMyrVFF+G5q8YNdI5/tc4EshgMNwLF/OMBzJJwxZTDl2Cag6CapaCODg
                  OD0dxJEuBz/7drCKBySwTD9lmc1QlL+D0mWAMhCaenZn/H+e8KUSwNFwf/g2URneSgkpIzzXAEWu
                  AcuWUkIKoCr5UFUzQA9tZiFZyjJxcGwAUL1QlC7wXDOV5N0U6FRFGo3OHvwXSs7jPM7jPM7jPM7j
                  PM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPEYS/x8FpTfPrH/FFgAAACV0RVh0
                  ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yNFQyMjo1MDo0MyswMzowMIwBXMcAAAAldEVYdGRhdGU6bW9k
                  aWZ5ADIwMjAtMDEtMjRUMjI6NTA6NDMrMDM6MDD9XOR7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
                  bWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" />
                    <span class="font-semibold text-3xl text-gray-800 float-right pl-1">tailwindcss</span>
                </div>

                    <svg class="w-10 h-10 block md:hidden" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                      <title>Tailwind CSS</title>
                      <image id="image0" class="w-full" x="0" y="0"
                      xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                  AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
                  B3RJTUUH5AEXFToPHlQX0QAAOqRJREFUeNrtfWecXMWd7ambOofpMN0TenKSNDPKWSCBMiKKDMZe
                  r43T4gfG8GxYA4YFG7x+sDhgY2ODCfaySzRJEkEBJZTzSJNzp+mcb6r3QcESktAozAxgnS/9u9X3
                  3grn/Kv+FS/BEOPqiSDjp9hNepPt8skzL1roLi27HIRJv/yfD04tqC29jNfp+75617Y3hjod53Fi
                  cEP14rtuh7amoKHcbMy/pX78tIudbuc4i4EIDDJk5yety1UTm5o6/7pbo6F+74+/su29R19EbqQL
                  458RQyaAsfuJjS0U7pk577LFbqfGISe7QXMiRMaEpJzomD5r0V3lnrz6hN1e4ikrrXjo291N9z9N
                  z1n89957L3ie17Asq7Xb7fF/+7d/ow8//DCy2SwefvjhYSncLwLYoXjpT78JIZ7HuWhn5OXW9j0f
                  MFpzrdXh9LT5ykl/ZBTt6AxWzr6wdL5Ao5zW5NaGIxGlo6V5+cc7zzzO++67T7N06dLZN910U/6c
                  OXN8RqPRPn369D+MHz/+x4qiKLW1tbvKy8unlpWVXTVhwoToBx98EBqpQv88YWhqABWkbPS4h+tH
                  T9McOND08baNa//S6VtUvviaO4tZhhLBUFowEH4dZYUsIA+QuoZpS3ZtWnkfkEqcSXQ/uPNuUlNT
                  8/25c+c+zPO8smrV6h+mkgm2trbuepstj2g02v/b39e1d+LESf9bXV3lqq6u3sCyzBJRlGKCILAM
                  w8h33nnniBIxUhgSAUhATpLo7yrGT3+3tr5oiaRISu9AJctxBNlMBhxLsb9JDouZcIdGLztt+dUF
                  hWVV1z3wzZ1/fvAZDKodePLJJw1ut/tqnuf1sVj8NYvFupjjOI1er0O+XX9j58CaXd3d9UimUvD7
                  OvLMfOttkjw3P51OEV7Q1LGsUDV27OjFLpdrbHt7+zM/+MEPVjzxxBPqSBMy3BiSJuDj7UClLRQu
                  LvVc4XJa3awSYZOZBPGF89REMkdCwV44dAfiB9asvePDj5Y/wSdza7zhroJMIrZ51TackoQ77rgD
                  NTU1t8+fP/+/6urqLu3t7TSHfVu6FZhmBIJhWPVdxVOnFk9OJQaYWKQP5UVpbX1jaX17e4iEImn0
                  tq315VId6uy519xbWVk5hmGYGc3Nza+tWbMmPtKEDDeGRAAAsGGvkrviIhdfVjtuIVGSJBqNbd2/
                  c0Wnw5ooKbXvQ2mJ1phf07jYSkxcx86Nm+Nh7xsKR+WVW0/+zgceeIAsXLjQqNVpWVue/ZbCoqLJ
                  LMsyYsY/fso4OsFuTvBWbRuK7DGGkfyMw+yH2xqAlgkTVg3D487ApAmhti7PqtHaZyVzZoYQIJFI
                  xtvb255bvHhxasaMGerq1atHmpdhw5AJAABqXMFYxehx12RzjPraX/9y3ejamgmN9aZRAqtClHhw
                  glmjGgxFgaQv7Q/2b3/gj8ie7F2PPPIIU1VV9b3Zs2c/WVhYPLe1af1zopheODAQNrpsPsZlTvC8
                  0glW7lFDvtZMT9eBzu6O1m3d7a17vH3tBwL9nXEx7dNZjTktS9PEahZIIJRAX18X3bF13c8bxs6Y
                  Xltbc2s6nQ6MGjWqe926dSPNzbBgyLqBAJDNRFr6Ow+8k8tlZX9rX7NzaVGFShy0tauZQPWhader
                  ClVyHTSbaWMtWt3//U4m8ovfH/+ee+65ByzLOisrK2+vrKqqzuWkcTHfe+4JY6IWQYhDS3uRCPXJ
                  Xe0dHX39vpc7OoIrVVXapapKaiCQUcCoMHKcxuQwVBbm229pmDj6+uKSqqLG8iwUzgU5q72pvr5h
                  TH6+neM4rsDv9y8BkBxpcoYDQyoARVSVdcvffNkoCJFR1SXTM1SxfrDiw90Gg7Z+xuwLGFZN8O4C
                  20UD/r7Zzk7v+q2f7Ps/P70ls+OnLxx0BB955BFQSt0lJSVTk8lkVzQaG+jv81bnRImtqKmbYTWG
                  oaTb4etvjeze1fTYlq0dfzObmZ67Hk+fwJGURSC249GvxXb1+wdemTB54P81jpswXWuiJN9dNDYY
                  DIDjCCRJMrAsy4w0McOFIW0C1u8BLinLtnOJlDchp/L7+jr+p37qnCuLS2pciqSCUZOQGBsEViRi
                  NutxFRQsEUVp1dsfJ30AcPnll5smTZr08rx5835UWFh4yaa1r72oyuEZULx8dUEANNeD5qYdfR8t
                  33Dzvt29Lz3yvBxdsUH6zDR9sBN0ej3t7e70rdQKaq3TYaoymTTo94toaWnr2blr//2hUKh93bp1
                  /xQjk0MqAABYvg+YNQ2QCO1rrJw8v2H2/H81mqxMX2crijxu9HU0A2BRUTuKuIvd5p6uzkjDzDv6
                  vvKVmxui0ai9qrr6LofDrmdY3sKq+6fMmGQ1uq0+omS66e5dmzZtXr/jlu6+yPpH/zq47iMArNqq
                  YEotjaRzydV6Hbmy0JWXV+xxIjLQGqyoWzC9vn7MTTNmzNj6xhtveEeUnWHAkDYBh3HvnwCA0vf+
                  ap4miSLn7WwGywtgBRuqakqQzSTQsm8Hcpk4IilBt3jxkperq8orm5tblu3fv+/vAL1ZEmPcmBqn
                  BdkuiOleumPz1pU7t7X8azSZ6HrsxdNP06Mvqfj3byV69+w6cI/L5XrOKTh0VNtYVVtTBUEQEIvF
                  7gDw1eEkYyQwLAIAgHu/Bj4RCZXGIwG4i9wgNAxf53oEAgHY7XlwOPRIJokqGBzVdru9hud5bUFB
                  wZKE928bivMoMegy0JN+JCI96uZNW1/eta31h/c8lTsrC33kDwr+/euBNysqOlbbXSWLGLUA7R3d
                  0Os0aiqV7BqushlJDJsAVBWy2axtMfCBhf62zSSZ08FTWoNCgwfZtIxsej+isaSUjoS27t21cc5A
                  QTnknF87feaUizi5F3KmD339HZFd2w88umd765P3P6uckzb6kWfVXH1D8O0xycj8huoYu3XfyuzK
                  XbFfiTL/9HCVzUhiyH2Aw5h92X0kGdwXHOjfOaq2rrKkqMhNslkZWc2N0NrmoqldQTbezl185den
                  5sKbdEXFWlLq8IGT25GMdij79+7Z8vGa3T/Yvbfv+UeeV6SzT9FRaasEVz6q+Aar1a1JSMVk4pTF
                  NR6PZ2F1dfWq5cuXh4erjEYCZ1wD/OQnPwGAY6ZW77vvPo1Op0MsFsvpdDre6XSWaTQaKRAI9Iwd
                  O/arxZ7rv7Vv97rwxnW/W1ZaYZ2TpaN0dTPKwTIqzI4GGKx9MOoNWrvNBDO2Q04klI7ujvbOLt+v
                  d+/s+J9gIBP41WuDd/YGi4yS7kjE4gFrLmvKyIWs3W535eXZnIWFhQsefPDB1gceeGAkuBkWnLEA
                  LBaLyWazXfD444/3RqPRPUVFxVXjxo39f8FgUDlw4MCdJSUll0yZMuWnXq83vWbNxw9UVVf/vKKs
                  zKXVGaTVb2/5g1ORpmZzOV1Xxx4QRo/IQA8KqtzoaNmFsuoGfPTaY1vETOLp9k7/snt+ne39rLR8
                  q7ycaFiW4SlVH29rO22ByByykiRmNLyKbMqPtvYuyFIuEQwGd6VSqZHmaEgxaAHcfffdjF6vN1ut
                  1rTX68X48eOfnjRp0nXNzS2hjRs3Xjt9+vRbR48edWkgEEAqlQqOHlNfXVhQaGcYxl5aUjB3wN/T
                  b7XkuWLRCF9cbP5e7fhGEvW1g+W3oD8yClOmXYymfdshZPZBpzfCVdzQ8c7rL7/wyLPqcW39ky4X
                  +g0GV346PUqrKDM1kUgdS4ieEuL/mcu1YY+qvpdWlIE3wv+ove8qLyUEhJepapQYliGqKkoMSf++
                  vVNmCCilisqyLOoqI8r77zz7u5ha8jefL7DhF7/4xUhzNKQYlACeeeYZ1m63f6e0tPTb3d09mwnD
                  PuJyuS/QaDSsze7INwqJS3s7tzpLS0sRjychpToaWnb1KjrtUgwMBOE09V5o5n18d1sIeiGD6VOK
                  SMDbAqerDK3NbahuuBZGowE2exGC7Sr6Og+gtNSxqLDAPR7o33g4HT+oqYFWlgtNkci105LJ79iy
                  2RJGVXUsQAiloISgmmG+Ua7VbdxvNP6ovqRkk8Sypc5MeowtmhjvVoQZDoUroVRlKBDv57HHMcHx
                  hzx7vjUj6617du+HrLQwNmNPadP6J7c/+gfpnDc3nzd8pgDuu+8+6PV6AHBNnDjxLpfLVcZy3Oie
                  1vfj7fvlLKXzEA4HMH2y/rt6fVrYu/t9QJEw76LCyToNiDewGjadiobJ+R4GWVC5A5BjEDMhtX1f
                  U8ZTNV5L1STb3b4FenMlurvbUeexIBPrRkF5vrG8quSyH93S/8ljL4DeVVlJHKlUQ3k8/vuiZHIq
                  oZQ5zI4CgIAAFCCKKpSlUhcaVOVlv1b79zxJvNyTpa4CxSDoKCEEKiiApEWF5ubqKe5Z7mvdVYUs
                  zys6gQc0Ak+kjE+fi8lfevKBzxDA/fffz9hstmkajcbg9wfbwuFoTKc3IpVKs3PmNN5RWaqnodBG
                  uIpEWEzECDUNt6UFAAVVZYbKMsrsKggVoaZFpFJxJJPxdH9vf3t/X+D51vbInvGzwy8WFJXa1PTb
                  6OqfjoaGuejtMSHd+xu43RZSWlF+o3HTzt/+S3VxvyWdXjQqHP6dLZMtJSDQQQs9eHBgwR3qzDA4
                  SG8GIpBJlTiz4m351AQjDADoMQsNNDkC1WlE4Wi7yW7iIGYTUKQswBkgZ6VOLkfFkSZnOHBSAYwd
                  O3bJpEmT/koI4Vd+tOz19u2/aJYy14xlZB8qS9IgmR7i0KUhZtM04k1JUi4nSbKUlURRoZRKsiLl
                  VFVNplPZcMAfDsTiibW5rLTB74+1USpH4zFZ27r7k00TZy1etO+TDXCXjoHL7UQ2J6EnWI0BfzeK
                  iwuLyquKLtS+EovVJ2J/zsspbhssMEAD/hDpJzJTIzRQQWGmWmjAH7qPQIYMFixYEChZGfJjq+HL
                  XwzdXD30ggnJTAyqqsFALNT3n2+cemHKlwEnFMDPfvYzGPSGGQWFhcZoJAqPp+j68aMWqjqmF1Ts
                  RToakHt7uv0Dwej7fn9oezyWbJNlKcJxXJRVqSwSVcxlRElR1Ww0JmfFrCKaLKycTUv0Z385GMe/
                  fw2Zns4DLzROvXieTstzof4NYHg7ero7odPEMeDvRKGnRCgwlTxqja81FIisIx954MCAgkCBCgYE
                  wEHLp6CgABROha+CgaNdC14WQABkIcOHKBKQYAQPwa6BjgooCZvhfeADdFsvQcUkFzQ6CxRJhJSR
                  YyNNzHDhOAE88cQTegDF/kDgjX27d92ckxSPSRsjOvSz2Wg7ujpaO7u6vI/v3NmxnFKpLZWQlcde
                  GkxUxxrUI38B7ue2rKqfsKO1pKyqLr3rf9Gzz4vSUd9EPPY1eA/8BvFoCFVTKkt9ts0o9JmPkAxQ
                  JJDFAJIgIDCChxk66KFBcLQWmueuQeC1vTA9tQ1MWIIfcYhQkYGKPuTAagk8358B/mdbUTpgxL4H
                  P0LomWvhchmgKDJVc7kvd9/vKBwzEvjggw8ap0+f/uLkyZN/Fgn7PUay1lBSRPM9tm7EBvYpmzd+
                  8rfduzu+JkvSitsfC4dWblHput1nHvnq7XLikjlWV21t1WxfXzc0eReirn4OOF5ALN6LZOB9VI6Z
                  hEB7D2w7s6A46OwREOghQAALL9LogQiKLHjCIHPDaNjGa2CY4ERsZjlyG1rhiZlghxFWCNBBRpgD
                  PD+8GJmxTsjrWpHfT7EjHYRrVikYmlN37Gx58e018X0jTc5w4BgBLFy4sG7+/Pk/t9lsJlVl62xW
                  JT/fFEQ0sEvctGHrk5s/abmT17ID33koeNoR3VtSwk91Oi2zLRbbTKvVdpHZZLnAmucKenvksvH2
                  y5yufKGjrQPQ1sLnC0FJroDTsBmCdgxyTg7M3ztAJYosJKSRRQwZiJDBQUEaFCIoVFYE+do4uGqc
                  YKQ4DHYB0UY3NCt7IGQINOBhhh5GVoU6twjOCXkITylEtsWH+PYehCaMhaxpUHyholVjp8zfvmbN
                  mi99T+CYJiAcDgc6Ozs73QWFdeGQj/FUxJGJt9Adm3e8tG3ngQce/LOaAaKDfvl9paVEUJR8syTO
                  z4tGLxcordLKsoUFtCxVCUPBUR9let/erZn8nYVwGt6AHPhXCIanYCq7Hb4uikz7bhQ31GP91PUw
                  Ug2yW3tBE8qR9VqFAAwA4gBUBmAEBoQBWE4PORNG0QQXei62w7ItBjlfD9OuCBw5PcJRBgatBpWT
                  CxH43QIof++Hq+7bGN1Yz5uLeh5Y9t67WwBsHXRmv6A4IoC7776bLS8r49evX//NqqLEExPGV0w1
                  8l4cONDasXt3x0MPPq2mB/vS2woLYdbrNc54/IbiZPLOwpxab1RYhgUBwIICSIMid9BuEX1tL9Lf
                  vBAWWx1iGRmjJ49FJp1A64FpYNTn0d+VxuhHb4AYpQgs/T2IhsIkqwgqQDMALQAdACgUuUAShDDg
                  NEbkMiGwYgLMjfUgt1ugMxOEPgnAcO9q5HxRsJwHAs+h1CMgc0UVdGYjMpk08izmfIvVOgr/LAJ4
                  4oknUFpa+tUJ48c/6vX7wSmb9c68NNIDAezb2/J8MpAa9Nz47dXVMORyrrpg8ElPMnV1sWLgzDAe
                  8tcBHGnJAREy0hDBN2fQu7EFnom16Nm+ApvX/BF6rg9l1m64XFPAsxJUqqDt3b1oSOWh6UoL0h1+
                  FO+MQgTgB1AFQOUYxJftRWpJJfLMZrCcDlSR4PCw0AlJMFDBTTHAf0Up1O4gZFUFrypIZNKQ0wm0
                  t+5HKpVBODywu6+3959iWTAHAMlkkisrK7ux2OPJZ1gObS29oGIrAqFgKtcefvWhlwc/A2cRRUdN
                  NPp8eSIx30h1xALDUd77YRy85sHCAh3ssh57X9oOf1k+9PpRsJu2wm7LA8+7wTIsQHQIxWLQbgtB
                  ZSi0S+ph8tYit/sdFKsKwgBSE5xw334RTGYV6UQSZoMegtaMdMIHo84MhdVDw/GAGAEd60Jy5X6k
                  0klkWT2aP/SjbWMTLnu0BtvWv5LYsif1rRwzqmOkyRkOcACQTqeV3t7e5Xl5eTMGBsJakz7DQs0g
                  k0j4vXJ20Ktu/k9VFVMaCt1TlkzOUyklBwdhCD49XEMAKIdEQAjgrSYwXDMbBsGAolo7tOYSCBo7
                  xFQ3FCkMqCoyWQX6lgRCRSyso2xIl8QBpw6sPwmTwKDwthmonOaCRtBBVVUQAvCCAQxhkMhwaHvv
                  AKourYbNYkU2G4QykIPEWvDxkyvg++tujP7xYuTpskB2r8zG9kQe/u0rI83NsIABAEopTSaTv/rw
                  o9VX7/3kqd/UViiKqirIprIDNEUH3fYXS1K9J5X6GlFVhgBIIHNo5P0g6RnkMIAEuhFGB4IYQBwi
                  JPCiCuJPQgUFpTJY5qBrwgk2AICiSFADCtj+OJI3jYLFZoKrtADq7BoQAEYDC2OBHgKnASEE0XgS
                  /f44srksOI0Z8XgGbe/uQNfmLlBQpDI5tPUnse7n72HgzzvAWLUYc9kURAK9YBhKdDotP9LEDBcY
                  AHj00UeRy+XmTJww9tGimiuWRiJgCAF4QqiTDG6J/JX5+cQSjd5mlCT7YXuXIEOFAgkyujCAboQQ
                  RRo6sCiFHW5YITACLL0K3PesQ9/330B7UwjB0D6ImX4wnAEMqwcIQEUFA9VamC+vhclaAoPODiwo
                  gCQw0KZkDLRFoFAVkpRDaH8Su370LlrbQhgIG+AoqMfiP30fbduaEUvLKLvIA9msQfRvu6GyBKPv
                  WAhXgQYtB/bDZDZCFpWR5mXYwAHAfffdxzc0NPywoaFhnNebj662dXBWMmA0nCtqoEYAmVO9iKco
                  LsllLwMlYMGAAQML9GBA0YswUpCRBx3yYTk0nAsAFAmNiP5vV0Nd1QPtJi+M33gH/f/aiMyNIlz2
                  DMDa4A8lodqsMP1sEZwuGwStE1CyKBhfjuY6N7S7+tH0pw0oHO1AcZENciYJo8eKuvHToaaCCIea
                  4Q2EofgFLLtzOawVeYCsQs0XUH7rBZh50wy07t0EllVACIGg5f8p5gGAQwNBkydPZhwOx9z8/PyG
                  gVCYKqKfFDiyENNBzZ79Xa9+sEk8qR/wgKeEu8CWN2lcLntnSSp1gY2aiBtWWKEHq+fQtsCMYCgD
                  fVZGMWxHZu6Ag72AbjmCzAQXPPdeAFpVCDmRgvHDTnizImi1HVHlImgdC9AdYODKj8JkEJAa2IF0
                  ohOcRkAwngM29CLkz0ENRuC4qAppKmLX/+xCSheExsKBUBmllTVoXHox9CUOyBKDghljMPnuSzBm
                  TjXa9m5AIhGEXq9FIpVSVMXUctkca958zUDHuy0jTdEwCGDDhg1qY2PjhmAwEGg/sOPj8qLAKIfD
                  bmIR5oIBb1OlK7Zp3a7jH/6P4uL8wlTyZ42x2ONView0mSokBxkW6MGBRWy0AXlPXQnt3DJE4ilY
                  2hPQqAebVwKgB1F0QYTRn4Hj2nq4xznAL6qGdGkd2BIDRK4CRVWXwWjQISvxCPTtRp4pAoUQ8JwW
                  HAGYwkL43tyNaFZBJiLDfcUYDHSE0PfSXpTMm47R02rQtGsL/H3tSIS8MDt4FDW4YXRTpGOdaNm7
                  GZlMGjpjPkRqQln1FL66rmIh5FRx//a2v73X+uWeFTxijhdccEFKEITuaTNn303Zitq+/gjrcaaJ
                  mI0XdXYGXl+9VT5ms+RdpaWexkjkrckJ9YoSyaSxwUQEcEgiiwxEmKFBZK4LeReXo6AgD4ZZHvTm
                  4jDuioBXOahQ0YEEkqDIj2eRrDDD1VgNh3MsrHlm2Jx5kHIxxLLFUBQG/X09cNjT2PD0+2j/qAsD
                  AxkonABjgQEHOiLIHRhAjlWRMTBo+802WGeU4aK7lqLrwBYo0haYjf0ADSAR6UDI3wJ/XwSEt8JR
                  UIuS6okw6TSgsh+B3o1k384Nme3bmu9NidLeVV/yGYEjAli1ahW+973vfXXK5CnfMRqMbEd3FI68
                  JPJMii2TjrbVkPC2NYeqw7srKviaSORXE5LqIge1EOZQmy6Ahx48cpCRRQ7yokrkTSyCyeSBQOPA
                  aAc6tzQjE4lDbMxDP5dDMikjnwKixMEwtwh6QUAm3oFcuh+UZpFMxxEOdsJtakJJIYv+Pd3oemod
                  oqs60fluK4KtITCFGqR3BMCIKuLbvLDO8WDRY99GLtGBvq5VMBn6IUoyMlkOjKYKDvc0FFSMg0lH
                  EA8dgK/rY4SCLSBIg+Us0GkLeIOPV0yTHO+8+nbwS+0RHjMZNGvWrDy32700m8vxAX9LpqpCz2lY
                  kdWy0lh/NLihsSLbu3YXcIVOP2VcIvlYETXxHGWP6eXz4GCGFgZoEJuRh7zJJdCbyqDKUWi1DHpU
                  CcqMYjjungTD3HIMRFLgmiPgQ3EoM0qgNQxAEeNQWSN2v9+JyIF2XLi4EDomDNAciiaPgz8cRrzN
                  DxKXkG0eQHJPAFTLQjsmH3U/nI95P7oFUqoTTbvehUEXQSJbBXfZ9XAWzIJOa0bItw99bSsRDXdD
                  okZYrRYYDC5ksgxSCYqSl2UyepWlVi4wpWfe6Nj45rv9X9pJoWMEMG7cuI7+/v4dPT1929KxvpTW
                  WDMmHMuQMg9rYTjxonAksmLhdHvEHGbvKr9x4qxoKgzZFwNHWPCEhXJoORYP7mC/v94O08xC6A1F
                  oFQCUdLQFhnhbnAi32pDns0IocaKre+3QAyLUM1GuGeWgec1aN8XwfYfLYOUkVF/3YVo3bcN7a0H
                  YDKwGHf1Argvmwx9vRv6KUXwLJ2CaT++GtP+bTFcFUbs2rQcPd29cBePQXHlpTCaCxHx70J32yqk
                  Es3QaPSw5hUhyV2FyokPwte7HWrOD8qaULSiAIZUJUJ5Ji6aDSnpSunlV9/u+9L6AccI4OOPP6bj
                  xo1rsdnyNJdfcdMDTle5pssLmHQSPAU6G1Wys635tZPqr2u4Kf/iak3f6gOwtmYhOnmkBRED2SiM
                  0IIDA4YQJJJBZC4qgC3PCYa3QpUi4FkKnUYLRVXBcQIELY+OTb1IdMYQCcVQuGAUFKJi7X3vg7bE
                  IJTbMPbaqejv2oeyUjeC3i50t+yDTifDM64EnnElsBTwCPn3oWPfLoQGkiitbECxpxCpaBf6O1ci
                  2L8TqpSGTnCBMC7kMioYloMoUwQCcZjYPYhGB8CCQ8ScRnCgE+G9B2jYGXvGOJZ8/NfX/CPN05Dh
                  uBVBP//5z/GHP/xBkWRJphkKWczlRKojsRAvFJRNajAZSIPRaEBWyYG3GmBEHIlCPdqv8iDvkfXQ
                  SBwIAXovNkH77akgYBENNcNeMBUMZwIr5zAQzCIxkEBBhRmEKtBZNcgAUPpT6NnghaHYiswWPxiO
                  oGTJOOTSMRDCwGorBMvIUBQZifgAepu6kEyJUBkbCjzVKCo3IznQit7WN6HISWh1FsiSCSpXgt0J
                  Cq+tBDHBDme2FRfE/HDm9yCazkDmG5HvlkGVHEStCLGYAxbmy4GmA93ed5pHmqMhxQn3Bk6dOtWb
                  TqcTXq9X6O5ofyzd84rZ7jRXOGwCzI4GMKwAKRuDd3MnbDvioBYBhY9dC39/J/KbcsgaKLKPX4jS
                  CdVwuqtAQCHLWQhaO8SsD22burDt3uUQJrjhcBkQy8jwr+wAJ1NEwwMItXuhtsShm1GK+Q/chM6m
                  tSguKYVGqwOogngsDEkRIJgrUFIxFpY8PYK9m+HvWY14ioLTVsNqtiCT5dCdsuLxPRzWuopRXjML
                  VmcJVjW3Y6ISQJ7NgKC8BEU11yDu+xhaIQeO58CDIJMT0z5v4vVYPNVSNfEb6s4d20aaq+ETwEcf
                  faQ2NDRs6ujoeEG76Wc7FC6T9lTmz3QWjTeBtQFUgZILon+/H4b1fqhOPdRL8mGY5EFmtw9MNgf5
                  q1UoLGxEOrIfbft7EGjuAtGlEQzGwOUXIn9ODbb9fh3yGgpQOLYU3YEeKE1xqKEscj1x6GeVYPFT
                  3wGyPUjEwigqKUEwMIBYigHRe2Cx5iOV6MbuTcsQj7ZBkQnsjkrAdhcsxVciHVoDSGn89x4VnQkO
                  nMCitacNvTu24UpNElVOBoKGByN3YqBvIzSkFyrVQKYmWJ018JTXaAxW3eKAOLdHVAS1qKgo1NTU
                  9KVzBk+6O3jlypVYu3Ytlu0X6YSiVFPaF1onWJlJeS6PixAtoWIA0bAMadkBKNVmmK4eDZtRQLzW
                  CWVFC6TRDphL8kCgwLvDi6ZnP4Z9ziQUltTCpFMR9Lei9Y9b0fXmfrQuP4Dsdj+gEnDVFoz6wQIs
                  evBfkYu3o715N6x2N9JZHpzBAZ5k4O3ahL071oJlCVT9TBSUzQCkMAhVEYuHEA8fgFnogaKosGl5
                  RDPAGE7CfE0UVxblUGaRoDdokM7kQCmB0cDB4a5GvqsQBFkoCo9IXI+Cihs0s+befOmYMaNvkiQp
                  XFRUtHX79u0jzdnwCOAYMexRMdEQ700EelfCQBvzCypKqJQmClER+/susDM8yLugGEadEayVIGIz
                  Iv38FkhTHDAaGKh6Cn88hlHTqtHfsR1SLoGisnrYpowB7zSCtepQOHsMRn3rYkz94RUoG1uInRve
                  QW93PyrrpsBgcSId7UDHgQ/Run8XzLZKRJmFWNn/daz1XYi/rwvgqgmdCEfisFtSIHwJJKYYAumH
                  mRcxya2iMV9GoUWGXsNBIXoYrRWwOjxwugsgZqLI5DSQSDXMBVfAXXktXKUXQ2ssBEBZo9GoUxmm
                  6mXKvJ6+4/8mMy8+N9K8Da8AAOCjNuDNTdlQXX73cpamRxVUjKnqC/tJX68A7uIiVNS5AFDwDAFf
                  akJvpw/BZ7aAn1wJm8uIna/vRUKUMHpaPbw93YASh91jQtWsMaieNwGe8QXgDGn0tOxEe2sXymvG
                  o7jEA3/PFrTtex9+fwj6/NlozV2Pt9puwTr/xWiOmyHJCWxqY3FBWQdYyQtOMEAxfQU6cw2Q3gCd
                  jgBQISs8DNZy5BfWwGq3IpsMI57kwOinIM+zFI7SK2C0N4LX2pFO5xCLxQBKoagqQCkCiaTzeZa/
                  gWj4EsNNN3clX3xhYKTJOxcgp/vAQ/8CcDqzuWLs7KdmLP7lzVqzC3u3r0WZaRl0Rh2SqRwyiTQo
                  r8XaH7wE23QPJt5yId699W+44pk7wbC9SKZZOFxVCPlakU11IZvOIJ7MwpJXiqLScogZH3xdn4Bl
                  EsiKJpQ1fhUfN5Vhq38K9vp4eONhBGJpiDLBRaP1ONARwuKyVfjm1DWIJnKgbD7SmSx0fBYMlwd3
                  cQU4kkEqmUQsqYXDswCOwknQGfOhqhSiKKK5uRnvvfceQqEQampqMHPmTDidTsiyDN/AAH57oAUr
                  zNaDU9McJ4JlXoOqPCTksk3dl1460jwOnwAO48UX/3rrNVcvfVqWJdLa1o2epj/D99LfkdwbApPJ
                  HnxzIgt+XB4IDHDPrML82y/Bzo3LMHb6zeAFA0Q5C2/HRvC8AXqDDpFAE0LB/dDrDZA0F8EsBCGg
                  H6xpCp5dU4cDmaVIZNuxpTOFQgsDgWZA0t2YWrwfC6u2wqoNIR7Pwmr3QGdywOGwIx7qQypnhNYy
                  Aa7SC2GwlABgIIoiZFkGpRSEEHi9XqxevRrFxcXwlJQgkkigJRJFWyqF7SDYb7JAYQ9NYxMAhIBw
                  bIyy7K8hS4/75s+PjDSZwyqARx99dObSpUvfEgTB0tnZQmqKtpGEN4KdL6yCd8V+qOEkVJWCLzSg
                  4uYLMefbC9CyayXsNgvMronw+4LQagl4QUWkbydisU44890oKKpFMGKDaLoV3vZ3UOdYhtZeAtmy
                  GP+1+hq47SI+2bsbNjRjdtkeTC/eA4FJIxLNobi8ERabDTpORn+/H7xpHGyFF8GYVwVF5RAI+JHL
                  5VBeXg5VVSFJEtLpNNKZDKLxOJp6+9ChqGjKiehlOQSNJsgcC5VhcGjz8T9K7PAvQwCe30ZV5Xus
                  LH/Sv3DRSHM6PAL4/ve/z1ZXV19otdonxttfqJ8+jbu5sqaB01lciMdFxL0JKLIMc5EZGlbEgV0b
                  ADULq70SvMEJPS+iv2s7JDUBo6UePMNBFePQ6LRwFRWhtdcGRm6Dw+hHKJSBuWgenl5Zi1i4BZPd
                  21BhboYoSkhkOIxunA5BoyCbiiIQpCiouhouz3ToTfloamrCq6++ioGBAUyYMAFz585FLpdDMplE
                  MBbH7kAAe0QF+ynBgFaHjFYLlRCA0GNL6GQCOBzOcymw7B2qmHk2OH/xF2YC6YwFAAAPPfQQDAYT
                  5G0/1nnGuJ4oqPB8S683EoPBDJ4XQKmKaCSAdCoBndGBAk89eCaD3u4doJBRVDYTiXACrd5+vNuS
                  RjjF4Io6DjPqnHC4CuFNXwi/rx9FmlfhTxXDaQGCffuQyqggvAU1o8Ygk/IjGZeRUStQ2Xg9rI4q
                  AOyRKr6vrw9r165FUVERPCUlaO73Ym8kit1ZGS1aPeI6HWSWO1StHyb5NMk/fM0yKjjuN1TK/Tgw
                  b9EpV1F9HnBWAjgaP/8enzeqrvql0trihaqkMiBANpsDK9jgdFdCp2PR37EBoqpF1ZiZAJOPrVuW
                  YSNjw2ZqhjeagLjNj3GWNH66uAD5ReVoC1+AbCoMj/41tHf0gzJm6E0OeEoKEfR1QEEhGN1YlNYt
                  AYUAluMhyzJUVYUoikilUojF42ju60dLOottsSSazXlICgKUw6QfVQr0yPUZCOAfTYJKBP5/5Fzu
                  2wPzFn3uvz9wzgQAAL/8lja/dlL1c4WF+YtTGRbusrEwm3h0N68FQRKCZQaMzlnwFGmxddVf8aec
                  EeMnX4fdvU3Y+MlGWHqj+PoYFbMbi1BQWIBQOIr+nk5QxgiT1QGzgUNXRweM9lmQuFHIUTf6+3sR
                  iYRRW1uLmpoapNNpRKNRBCJRbPIPYHtWRLOgR0Krg8KyR5F8MjLP0PqPFg8hlArcMlUUbxiYu/hz
                  LYJzKoD/+AZhy0ZPuHXClGm/ynOY+P6OT5BKdKK4sBJGSxkGmO8jHImhvtqHls1v4vn+BD6RLdAF
                  I5hvEjGn0ozS8lHg4Edfjxec1oY8Wx6olERvfxz5pVfCXjQNVnsJvN5+vPLKK+jr68cNN9wAo9EI
                  r9+PA8EQ1sfT2AUOYaMZCsf9g7Cjc3s0ceSonQuEHlMqlOCE5B/575hwetQzBBD45RClGwMXL/zc
                  9hDOqQB+dzlvn/zdpe8JfLbW37fNZHe4CcvZYTJqIPAMYsp4pHIsRtcVQpJU7N+2Ar5YEg6zEflO
                  N3idDtFQH3hOA7vdglg0hFjahMKq6+AsHAuW0yKXy0GSJIiiiH379oFhWQwkktgcSWBzTkanwQKR
                  F0AJGQRhnw4/e+s/JpwhAM+tgCTfFLho4bB9pcywfhnhterF0QmXfHiqe8+pAP5zPmF0k5ylGVFa
                  PG16468ZCIwkiiAsi1w2hcbGakTVWYiLFagsDkKn45BJBhHo3YdcNgFO0MOeZ0QwGAARxsBZuhA2
                  Vx0UBUecOlEUkUgkEI3FsLenD2sTGWylAiIGIxSG+Yf1UYqDp0YdTNuwVP0niochFDz3PpXE64Nz
                  FkeHgvBPI2//yqVQ1LLImLmPn+recyqAw/jzw6NGzVpr+cQa1JuyteXomxAHVzOA0hIHelKXIq1W
                  orxwH7IDe+H3dsBZUA6riUVXZxfMrgUg+vFgBTu8Xi98Ph8aGhpgsVgQiUQQjcexubMHqzKKsp/T
                  dSZ0hvXg+T2gaoBSmgEDLRjGRWW5lrDMRFA6iqqKcGR34nBZ/zFNDAEVuBWQ5OuCsxcO2fEz1o1v
                  AlphOsMLb6mKsjjauGDzqZ4ZksOidVSbMUhuKWXPR+f+faALGOTr9FBUCo/5Y/gCH6Btmx+esjEo
                  KS9BwBsA0V6O6ql3wGApxKqVK/Haa8/Cbrfjqquugqqq2Ll3Hz72BrFeJJE+QfdSWq99FoTZ2XP1
                  3JP2uT2vvgeV40ogCNcTqt5KFaUaVD2p9Q4J+Ti0FVaSF4DnXnWuXnZTcPaiwFCUO9FqZoCQN6mq
                  9BNZ2juoZ4YiIS//arrJckD/IN71/YtmiTWPncPAbjVBUUSIihEGaxEMehXhgSxUYRxqx98EXmM5
                  0r5HIhGsXr0ajY2N8EeiWNkXwHqVzwQM1udFhvm5JEvd3hsXDXpufvzvfw9fcbWFsNx3oMg/hqpY
                  gdO3/pM3I3QQ/gUONk0cuxkMuTE4bW7buSpv1/LniVhYeAlU5VkoqhMC97AmL32fr+iKUz47JAIA
                  gL/8ejKn2Re9SFun+y+Xx1KmUJ0+v2gUrGYBXm8AmryLUFixEBpdHnI5EZIkgVKKdDqNcDiMtn4f
                  XecbIOsUDn6zo0Pl+W9TSfmw5/qLz3iBpvvNZWAEzQQCPEMVeRyllAy59R/nEwCEFzpUqn6dqOKa
                  4MxLzmqRiXXbewLh+duhqvdBlk3gWYkqan10/OJBrWUbMgEAwBszQVonWafNWnTp2xU1lbZwXzdU
                  7WQUVCyBzuiC1+uFRqOBRqNBOp1GJBKB3+/P7W7vXPuCxnFhWKPnqUa3VpWlm3qvm9tzrtJV8Nb7
                  DiIIT1NZXPrpJuGcOH6nqjEAUJ5Ng2GeoIryWGjGgjP6ZG7ejuX1hGV/SWV5IdRD+eC5dyFJl0Um
                  LBmUoQypAADg4R9U1l144cQ1Ntdkp6NsKVo7/NizezeCwQCmT5+Ouro6xGIx9PX1JXp7e1/ZuXPn
                  c29Ou2yUwjK/Ixz3piqKX+29Yd4ZFdBnwfX2CoHVCE9QSfoeqHqkNIbU+j8dzgDguG4weJxK8v9I
                  jOqNT7vkM9Nt37aCowyZBEK+C6peT2VZc+T9HCsDZHFk7IIPBlsOQyqAr3zlK2T2nIu+s3jRvP9y
                  uQqEdDqDt956C9u2bcONN94Iq9WK3t7edFtb28ZAIPBgb2/vxrcuuEomPP8mGAZUlr7Sc93cIfOa
                  C956j4dG+0so8m04eID0kFv/Cf0OQig4NkwZZjNUZS04dg9yYh8YxCkoQxliJTxfDlWdDIZcDErr
                  oCgaelQ396D18x8xSm5BaNylg56MGtJPxjAMYxrb2HCr0+kWEokkKKWYMWMGKioqIEmSuHHjxg1N
                  TU2/9/l87/A8n3j66afhmX21HRxnUHK5a/uuHzryAcB72WLJ/dayu4lWAyjybVDV0/pe4D9GDz/1
                  x6muP33iDqWEyrIdwCKwzCLIMsASBYSRCAEBpTwUhYFKAeXY8Y0jYNkMVOWh0yEfGGIBiKJIU6lU
                  KpPJgFKKXC6HeDxOfT5fV0tLy8MtLS0vP/PMM8d+oZPSKkjSbX3Xzx2WkTPfZYtE93vL7ya8QKHI
                  tx9pS4FTWv/JiD6ZMAZVW/wjfhZEYY/Er+Dk6WIIwDIvSpL88enmf0gFIAhCYuvWrY+YzeZnOY6z
                  eL3e2L59+17t7u5+DEDPM888c9wzjFbd3HXlvGHdiuVbvFB0LVtxNyMIDJWk20BVApx7x+/QHYNO
                  Fz1J6DHpAgCea6GS9JPk+EtOu9yG3AlctGgRY7PZ6uvr622yLPe2tbV1/eUvfzmnH306V3C9u4xn
                  tJpfUln+N1CVHRLH71O1x6mHqE8RP89mASyONC5cdSZ5HnIBfNHgWr5cYDj+IaoqP6RUPVhDnotu
                  3+E65XQEcyryOVYCx95FM9lfRSed2cLUf5qPJA8W/oULRTGT/nfKsXcSjjvue0VnMmpzRuQf/5Zj
                  L1lGBcs+Jonsr8+U/KOjPo9Pwf3uuwQG/WKqKn+CIrsPE3DG1n8uq36OlcBxD6rZ3GOxiZfIZ5PP
                  8wI4BVyrPhpFCJ6iinwhVVXmhISd66r/uHD6j3g4LgaW+QGy4vORSZec9eLT8wIYBFwfLdeD42+j
                  oD+BLJmO/DGcjh/DUPDcdhDynUj93FNO8w4W5wVwGnCuXFFBBP6nRFGupYqiBejQWz8DgGMDlGV+
                  oUryU7Hx53a18XkBnCacq5azhGHGgOO+C0W5mlLVeWQuATg31k8AsKwKhrQRlrxAKZ6WVTUQH7fg
                  nOfnvADOEIZnn4G+wlMEjlsIhlwBVZ0KUBvUgwchHnTZ6Il9hUPX//iPHGrf2RxAA2DZ1SD4Xyor
                  ayITFkSHMh8jKoDilz8AKCUEB7/6CYZhkQXASICGKBSHCoZSCoWi//rP57Yr88Z3IShcHlFpPQR+
                  AlWUMWBILQiKoKo2QNUB4ClDGFCqgBAJDEmDZYJQaS8l2A+W2U1laRuhdH948uLkWSdqkBhWAXj+
                  9yMeiloBlm0kLFtPZamWcGwJAKdKqQWgmiOpIpDAkDgYMkBluZdw7AEATVSWdyqc0uy77Iux86bg
                  4w8ZUc1qwTE8BWUJhUxAJYHJy/bPmDHiJ44MuQCK/vaBgWXZyQCWgpD5AC2hqqo7WCF+Vt+aHr+c
                  igCEZbMU8IGQNZQhb1CqrAbJhb2XXHI6yTqPQxgSARQ/9yGIgDyG424G6DeoqtaDqtypV+Ye/h3E
                  oAshB5dcM0w3YZn/plT9A1WVDu+S+SNuVV8knHMBlPztQ56w/FegKvdRqpYf9pBPd+DjZLt4ThjO
                  EBCWjVOO/QuVxUe8l8z/8h7sd45xTgVQ+t+rR4Pgt1SRZx+eUv2sZVbAGVr/ycIJAeHZAQr8OyTl
                  Oe+l8/8pPgB9NjgnAvC88CHDcNxSEPoUlWXnYPu+p03+p8OO60MfipdlFLDse4Tgtv75F3eNZAF/
                  3nHWAvD85QOG0Wm+B1n+T6rK2mPe+ll9X5xoyvPkVf+R+z8z/Jh1dgDPdVBV/Tql6mr/onM/iPJl
                  wFlPB7NazR2Q5cepqhxP/tE3nmx51D9Cjr0c7GzbSZdpUVBJKgdD3mEE4ea8V189P+h1ApxxoXie
                  WwFWo/kGpepTVFWEczHjddbW/6nnDzcZhGNFyrD3I5n+pe+KJV+Y41uGA2dcA7ACP4VS+iRVDpH/
                  KZxeX+wcWf9Rzx/tL1BFEaDI/wGj9sH8d94Z9NmI/ww4IwGUvvhhHhjmT1SRDTglOcf+nt4qmKNw
                  0smT41fonrDXQVUeqnoP0Wnvz1+2bEgXw54Mxm2vf+6aodMWgPU3KwlhuQeoLNcfDDl76z+hr3AK
                  YZw0js8oYqqqDFT1PqIRHnC9++6wisC29f0KXtJOGs44B4PTFoAlj06hVP0mpfTk1s4yAMMcHKkj
                  hB68ZkEZcuL7T3eZ1ckcv88YczgSrqoEqnIP9NqHXMuHRwS2Te+ZoeF/SximczjiOx2cVgF4XviA
                  IYS5nyqy4WDIUXbIsjJhSBclWAfgExCmHXIuBgoKjjeCkGJQNBKGmUYprQdVTKDqqav+E+Csx3pV
                  lQVwN7QCzX//7fsD809vN83pwLZpmRE890dIClFVNTxU8ZwpTksADGFmUtD5x7S9HCcThrxHKf2d
                  qqire26c+5nfGi54dQXDErYCHHcLqPpdqIoTdPA9iLOy/qN/qcJBYe6BRsc4Plx2/8DcRed8r4L9
                  k2V6cOzTVFGuA8N8Nzr183eA5KDtr+zZFQRazatUlq6iBAfH3zl2Ayi9W0Jgff/115+2YRa9/r6T
                  cPwDUJRbD3YlMXhn8USjjScYdDrl7h6GAQT+WVXM3T5w0aJztgvZvuldO3jNC1SSFoNlk6oiV0Wn
                  LP7czVEMWgClL35YAYbdRxVZA47NEIb8F6Xyf3TfMO+s5uWLXv+QAYNLCSFPU0V2AyNymhcFx60l
                  LPmmGI00Ry65+ozzY1n/DuF02qmg9I+Q5fpDx8j+d3j8vBvPppyGCoNzAl9+GYTjboKqaMBzEcKy
                  XxfFzE/OlnwA6Ltqrtp3xdy/g2HmE0HYc5wkz3XVf4LnQSmBLF1AVbqGs+Z9y7HmfcOZ5MW++YN8
                  Tqd9BIqyHJJUTykFWEYEpX8823IaKgyqBih54X0d4fh1ACooIdd03zB70AcQnA4K3/rIQwh5jSry
                  JOBkE0pDfKQLywAsuw2E/l6VlFdDsxd+puNW8s47SDmECgjcLVDkb0FRCkGPGtUU+I9pTpwbmXbJ
                  53I/5KAEUPbSR+Mpx38Iql6jSuJHPbfMH7IEFbyxwk54/k0o8syjRTCkZ/mdyO842I1Ng2G2UIKN
                  YEgrJClAVVUkLCNA4F2UKqNByAWgtAGKwh+XXo6VASwJT1ywYsgK7CwxKAGU/veaO8Cy4a5rZz4/
                  HIkq+PsHTsIyr0NVZh5jTWcjgMPkHxeOY8NPMB9BGXJ4voKCgAIgOHy81Ml6MAQAz7+JXO7a8LQl
                  n0vrBwbpA1BZapZjyReHK1Hey+cFqapeQ1j2k3PW9uPk4Z91fWhVMkDVg74CpQwoJZTSE5J/5Jfj
                  ElRRfvx5Jh8YpAC6C8m7fd9cOKyHNngvm+ejVF4Kjtt8InJONnx84vATr0U85ZjDEZzmoQ4soxKG
                  PMBSZf9wltmZ4HM3OfFpuN9+30k49jUo8qzjfYJP5eJMHb8zGXM4WfyEADz7mixmro9Pvfysdu4O
                  Bz735wP4Lp0fhCRdRXh+GQih56Tbd9TvoK1/EE0GPXhE/CdUUb/7RSAf+AIIAAC8ly0coLJ0PRGE
                  58Awpz3ieOaHOuDUK5mOdiIFYTcU5YbIpIVDchbwUOBz3wQcDffy9zkw7A8J6IPHHJA40lU/Q0AF
                  YRuV5Msjkxf0jXQ5nQ6+EDXAYfgWzpfZXPoXFFhCBP4AyFH6Pc4yh8nxYxkFAvcKVeQFkfbIF4r8
                  E2b7iwL3hx+6CWF+QlXl61RV9MflaKitnyEAxwXBkP9QZekPkcmLjjtP6IuAL6wAAMC5YgVheH4K
                  gJ+CqvOgyIdO9Rri07w4TgTHvEIl+f5wR7QN118/0kVxxvhCC+AwSp58kuQa6qcSlvkeVdXLQFUr
                  VZXBWf9x5OPE1n9wlVOIsMyrVFF+G5q8YNdI5/tc4EshgMNwLF/OMBzJJwxZTDl2Cag6CapaCODg
                  OD0dxJEuBz/7drCKBySwTD9lmc1QlL+D0mWAMhCaenZn/H+e8KUSwNFwf/g2URneSgkpIzzXAEWu
                  AcuWUkIKoCr5UFUzQA9tZiFZyjJxcGwAUL1QlC7wXDOV5N0U6FRFGo3OHvwXSs7jPM7jPM7jPM7j
                  PM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPM7jPEYS/x8FpTfPrH/FFgAAACV0RVh0
                  ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yNFQyMjo1MDo0MyswMzowMIwBXMcAAAAldEVYdGRhdGU6bW9k
                  aWZ5ADIwMjAtMDEtMjRUMjI6NTA6NDMrMDM6MDD9XOR7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
                  bWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" />
                                                              <defs>
                        <linearGradient x1="0%" y1="0%" y2="100%" id="logoMarkGradient">
                          <stop stop-color="#2298BD"/>
                          <stop offset="1" stop-color="#0ED7B5"/>
                          {{-- <stop stop-color="#2383AE" offset="0%"></stop> --}}
                          {{-- <stop stop-color="#6DD7B9" offset="100%"></stop> --}}
                        </linearGradient>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>

              <div class="flex flex-grow lg:w-3/4 xl:w-4/5">

                {{-- Search section --}}
                <div class="w-full lg:px-6 lg:w-3/4 xl:px-12">
                  <div class="relative">
                    <input id="docsearch" class="transition bg-white shadow-md focus:outline-0 border border-transparent placeholder-gray-600 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal" type="text" placeholder="Search the docs (Press &quot;/&quot; to focus)">
                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                      <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
                    </div>
                  </div>
                </div>


                <button type="button" id="sidebar-open" class="text-gray-500 focus:outline-none focus:text-gray-700 flex px-6 items-center lg:hidden">
                  <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button type="button">


                <button type="button" id="sidebar-close" class="text-gray-500 focus:outline-none focus:text-gray-700 hidden flex px-6 items-center lg:hidden">
                  <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
                </button type="button">

                {{-- Links section --}}
                <div class="hidden lg:flex lg:items-center lg:justify-between xl:w-1/4 px-6">
                  <div class="relative mr-4">
                    <select data-version-switcher class="appearance-none block bg-transparent pl-2 pr-8 py-1 text-gray-500 font-medium text-base focus:outline-none focus:text-gray-800">
                      <option value="v1">v{{ $page->version }}</option>
                      <option value="v0">v0.7.4</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
                  <div class="flex justify-start items-center text-gray-500">
                    <a class="block flex items-center hover:text-gray-700 mr-5" href="https://github.com/tailwindcss/tailwindcss">
                      <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"/></svg>
                    </a>
                    <a class="block flex items-center hover:text-gray-700 mr-5" href="https://twitter.com/tailwindcss">
                      <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"/></svg>
                    </a>
                    <a class="block flex items-center hover:text-gray-700" href="/discord">
                      <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 146"><title>Discord</title><path d="M107.75 125.001s-4.5-5.375-8.25-10.125c16.375-4.625 22.625-14.875 22.625-14.875-5.125 3.375-10 5.75-14.375 7.375-6.25 2.625-12.25 4.375-18.125 5.375-12 2.25-23 1.625-32.375-.125-7.125-1.375-13.25-3.375-18.375-5.375-2.875-1.125-6-2.5-9.125-4.25-.375-.25-.75-.375-1.125-.625-.25-.125-.375-.25-.5-.375-2.25-1.25-3.5-2.125-3.5-2.125s6 10 21.875 14.75c-3.75 4.75-8.375 10.375-8.375 10.375-27.625-.875-38.125-19-38.125-19 0-40.25 18-72.875 18-72.875 18-13.5 35.125-13.125 35.125-13.125l1.25 1.5c-22.5 6.5-32.875 16.375-32.875 16.375s2.75-1.5 7.375-3.625c13.375-5.875 24-7.5 28.375-7.875.75-.125 1.375-.25 2.125-.25 7.625-1 16.25-1.25 25.25-.25 11.875 1.375 24.625 4.875 37.625 12 0 0-9.875-9.375-31.125-15.875l1.75-2S110 19.626 128 33.126c0 0 18 32.625 18 72.875 0 0-10.625 18.125-38.25 19zM49.625 66.626c-7.125 0-12.75 6.25-12.75 13.875s5.75 13.875 12.75 13.875c7.125 0 12.75-6.25 12.75-13.875.125-7.625-5.625-13.875-12.75-13.875zm45.625 0c-7.125 0-12.75 6.25-12.75 13.875s5.75 13.875 12.75 13.875c7.125 0 12.75-6.25 12.75-13.875s-5.625-13.875-12.75-13.875z" fill-rule="nonzero"/></svg>
                    </a>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      {{-- /Top nav --}}

      <div class="w-full max-w-screen-xl relative mx-auto px-6 pt-16 pb-40 md:pb-24">
        <div class="xl:flex -mx-6">
          <div class="px-6 text-left md:text-center xl:text-left max-w-2xl md:max-w-3xl mx-auto">
            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-4xl font-light leading-tight">A utility-first CSS framework for <span class="sm:block text-teal-500 font-normal">rapidly building custom designs.</span></h1>
            <p class="mt-6 leading-relaxed sm:text-lg md:text-xl xl:text-lg text-gray-600">
              Tailwind CSS is a highly customizable, low-level CSS framework that gives you all of the building blocks you need to build bespoke designs without any annoying opinionated styles you have to fight to override.
            </p>
            <div class="flex mt-6 justify-start md:justify-center xl:justify-start">
              <a href="/docs/installation" class="rounded-lg px-4 md:px-5 xl:px-4 py-3 md:py-4 xl:py-3 bg-teal-500 hover:bg-teal-600 md:text-lg xl:text-base text-white font-semibold leading-tight shadow-md">Get Started</a>
              <a href="#what-is-tailwind" class="ml-4 rounded-lg px-4 md:px-5 xl:px-4 py-3 md:py-4 xl:py-3 bg-white hover:bg-gray-200 md:text-lg xl:text-base text-gray-800 font-semibold leading-tight shadow-md">Why Tailwind?</a>
            </div>
          </div>
          <div class="mt-12 xl:mt-0 px-6 flex-shrink-0 hidden md:block">
            <iframe src="/workflow-animation" class="border-0 mx-auto" style="width: 40rem; height: 30rem;"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-center bg-repeat-x -mb-8 md:hidden" style="height: 142.5px; margin-top: -142.5px; background-size: 3241.5px 142.5px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
    <div class="bg-center bg-repeat-x -mb-8 hidden md:block" style="height: 190px; margin-top: -190px; background-size: 4322px 190px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
  </div>
</div>


{{-- Main container --}}
<div class="w-full max-w-screen-xl mx-auto px-6">
  <div class="lg:flex -mx-6">
    {{-- Side nav --}}
    <div id="sidebar" class="hidden fixed inset-0 h-full pt-24 bg-gray-100 z-90 w-full border-b -mb-16 lg:-mb-0 lg:static lg:h-auto lg:bg-transparent lg:overflow-y-visible lg:border-b-0 lg:pt-0 lg:w-1/4 lg:block lg:border-0 xl:w-1/5">
      <div id="navWrapper" class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-0 bg-gray-100 lg:bg-transparent overflow-hidden">
        <div id="navGradient" class="hidden lg:block h-16 pointer-events-none absolute inset-x-0 z-10" style="background-image: linear-gradient(rgba(255,255,255,1), rgba(255,255,255,0));"></div>
        <nav id="nav" class="px-6 pt-6 overflow-y-auto text-base lg:text-sm lg:py-12 lg:pl-6 lg:pr-8 sticky?lg:h-screen">
          <div class="relative -mx-2 w-24 mb-8 lg:hidden">
            <select data-version-switcher class="appearance-none block bg-transparent pl-2 pr-8 py-1 text-gray-500 font-medium text-base focus:outline-none focus:text-gray-800">
              <option value="v1">v{{ $page->version }}</option>
              <option value="v0">v0.7.4</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
          <div class="mb-10">
            <a href="/docs/installation" class="flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium text-gray-900">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M12 21a2 2 0 0 1-1.41-.59l-.83-.82A2 2 0 0 0 8.34 19H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4a5 5 0 0 1 4 2v16z"/>
                <path class="text-gray-700 fill-current" d="M12 21V5a5 5 0 0 1 4-2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-4.34a2 2 0 0 0-1.42.59l-.83.82A2 2 0 0 1 12 21z"/>
              </svg>
              <span class="ml-3">Documentation</span>
            </a>
            <a href="/components" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium text-gray-600">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"/>
                <polygon class="text-gray-700 fill-current" points="21 6 12 10 12 22 21 18"/>
              </svg>
              <span class="ml-3">Components</span>
            </a>
            <a href="/screencasts" data-external class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ $page->active('/course') ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v2h2V5H4zm0 4v2h2V9H4zm0 4v2h2v-2H4zm0 4v2h2v-2H4zM18 5v2h2V5h-2zm0 4v2h2V9h-2zm0 4v2h2v-2h-2zm0 4v2h2v-2h-2z"/>
                <path class="text-gray-700 fill-current" d="M9 5h6a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zm0 8h6a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1z"/>
              </svg>
              <span class="ml-3">Screencasts</span>
            </a>
            <a href="/resources" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium {{ $page->active('/resources') ? 'text-gray-900' : 'text-gray-600' }}">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M9 22c.19-.14.37-.3.54-.46L17.07 14H20a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H9zM4 2h4a2 2 0 0 1 2 2v14a4 4 0 1 1-8 0V4c0-1.1.9-2 2-2zm2 17.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                <path class="text-gray-700 fill-current" d="M11 18.66V7.34l2.07-2.07a2 2 0 0 1 2.83 0l2.83 2.83a2 2 0 0 1 0 2.83L11 18.66z"/>
              </svg>
              <span class="ml-3">Resources</span>
            </a>
            <a href="/community" class="mt-3 lg:mt-1 flex items-center px-2 -mx-2 py-1 hover:text-gray-900 font-medium text-gray-600">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path class="text-gray-400 fill-current" d="M20.3 12.04l1.01 3a1 1 0 0 1-1.26 1.27l-3.01-1a7 7 0 1 1 3.27-3.27zM11 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                <path class="text-gray-700 fill-current" d="M15.88 17.8a7 7 0 0 1-8.92 2.5l-3 1.01a1 1 0 0 1-1.27-1.26l1-3.01A6.97 6.97 0 0 1 5 9.1a9 9 0 0 0 10.88 8.7z"/>
              </svg>
              <span class="ml-3">Community</span>
            </a>
          </div>
          @foreach ($page->navigation['Documentation'] as $sectionName => $sectionItems)
          <div class="mb-8">
            <h5 class="mb-3 lg:mb-2 text-gray-500 uppercase tracking-wide font-bold text-sm lg:text-xs">{{ $sectionName }}</h5>
            <ul>
              @foreach ($sectionItems as $name => $link)
                <li class="mb-3 lg:mb-1">
                  <a class="px-2 -mx-2 py-1 transition-fast relative block {{ $page->active($link) ? 'text-teal-600 font-medium' : 'hover:translate-r-2px hover:text-gray-900 text-gray-600 font-medium' }}" href="{{ $page->getLink($link) }}" {{ $page->isExternal($link) ? 'data-external' : '' }}>
                    <span class="rounded absolute inset-0 bg-teal-200 {{ $page->active($link) ? 'opacity-25' : 'opacity-0' }}"></span>
                    <span class="relative">{{ $name }}</span>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          @endforeach
        </nav>
      </div>
    </div>
    {{-- /Side nav --}}

    {{-- Right content/TOC pane --}}
    <div id="content-wrapper" class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5 ">

      {{-- "Turbolinks" --}}
      <div id="content">

        {{-- Vue-enabled area --}}
        <div id="app" class="flex" v-cloak>

          {{-- Main content area --}}
          <div id="what-is-tailwind" class="pt-12 pb-16 lg:pt-12 w-full">
            <div class="markdown mb-6 px-6 max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
              <h1>{{ $page->title }}</h1>

              {{-- <p class="text-gray-600 text-xl leading-snug mt-4">Tailwind is different from frameworks like Bootstrap, Foundation, or Bulma in that it's not a UI kit and doesn't include any built-in UI components.</p> --}}

              @if ($page->description)
                <div class="mt-0 mb-4 text-gray-600">
                  {{ $page->description }}
                </div>
              @endif
              @if ($page->titleBorder)
              <hr class="my-8 border-b-2 border-gray-200">
              @endif
            </div>
            <div class="flex">
              <div class="markdown px-6 xl:px-12 w-full max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:w-3/4">
                @yield('content')
              </div>

              {{-- Table of contents --}}
              <div class="hidden xl:text-sm xl:block xl:w-1/4 xl:px-6">
                <div class="flex flex-col justify-between overflow-y-auto sticky top-0 max-h-screen pt-12 pb-4 -mt-12">
                  <table-of-contents class="mb-8"></table-of-contents>
                  <div id="ad"></div>
                  <div id="refactoring-ui-widget" style="display: none;">
                    <a href="https://refactoringui.com/book?utm_source=tailwindcss&utm_medium=sidebar-widget" class="mt-3 block">
                      <img src="/img/refactoring-ui-book.png" alt="">
                    </a>
                    <p class="text-gray-700 text-center">
                      <a href="https://refactoringui.com/book?utm_source=tailwindcss&utm_medium=sidebar-widget" class="text-gray-700">
                      Learn UI design, from the creators of Tailwind CSS.
                      </a>
                    </p>
                    <div class="mt-3 text-center">
                      <a href="https://refactoringui.com/book?utm_source=tailwindcss&utm_medium=sidebar-widget" class="inline-block px-3 py-2 text-sm bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600">
                        Learn more &rarr;
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              {{-- /Table of contents --}}

            </div>
          </div>
          {{-- /Main content area --}}


        </div>
        {{-- /Vue-enabled area --}}

        <script src="{{ mix('/js/app.js', 'assets/build') }}"></script>
        <!-- Algolia DocSearch  -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/2/docsearch.min.js"></script>
        <script type="text/javascript">
          docsearch({
            apiKey: '3df93446658cd9c4e314d4c02a052188',
            indexName: 'tailwindcss',
            inputSelector: '#docsearch',
            algoliaOptions: { 'facetFilters': ["version:{{$page->docSearchVersion}}"] },
          });
        </script>
      </div>
      {{-- /"Turbolinks" --}}


    </div>
    {{-- /Right content/TOC pane --}}

  </div>
</div>
{{-- /Main container --}}
@endsection
