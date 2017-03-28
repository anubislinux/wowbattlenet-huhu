! function e(t, r, o) {
    function a(n, s) {
        if(!r[n]) {
            if(!t[n]) {
                var u = "function" == typeof require && require;
                if(!s && u) return u(n, !0);
                if(i) return i(n, !0);
                var l = new Error("Cannot find module '" + n + "'");
                throw l.code = "MODULE_NOT_FOUND", l
            }
            var c = r[n] = {
                exports: {}
            };
            t[n][0].call(c.exports, function(e) {
                var r = t[n][1][e];
                return a(r ? r : e)
            }, c, c.exports, e, t, r, o)
        }
        return r[n].exports
    }
    for(var i = "function" == typeof require && require, n = 0; n < o.length; n++) a(o[n]);
    return a
}({
    1: [function(e, t, r) {
        (function(e) {
            ! function(o) {
                var a = "object" == typeof r && r,
                    i = "object" == typeof t && t && t.exports == a && t,
                    n = "object" == typeof e && e;
                n.global !== n && n.window !== n || (o = n);
                var s = /[\uD800-\uDBFF][\uDC00-\uDFFF]/g,
                    u = /[\x01-\x7F]/g,
                    l = /[\x01-\t\x0B\f\x0E-\x1F\x7F\x81\x8D\x8F\x90\x9D\xA0-\uFFFF]/g,
                    c = /<\u20D2|=\u20E5|>\u20D2|\u205F\u200A|\u219D\u0338|\u2202\u0338|\u2220\u20D2|\u2229\uFE00|\u222A\uFE00|\u223C\u20D2|\u223D\u0331|\u223E\u0333|\u2242\u0338|\u224B\u0338|\u224D\u20D2|\u224E\u0338|\u224F\u0338|\u2250\u0338|\u2261\u20E5|\u2264\u20D2|\u2265\u20D2|\u2266\u0338|\u2267\u0338|\u2268\uFE00|\u2269\uFE00|\u226A\u0338|\u226A\u20D2|\u226B\u0338|\u226B\u20D2|\u227F\u0338|\u2282\u20D2|\u2283\u20D2|\u228A\uFE00|\u228B\uFE00|\u228F\u0338|\u2290\u0338|\u2293\uFE00|\u2294\uFE00|\u22B4\u20D2|\u22B5\u20D2|\u22D8\u0338|\u22D9\u0338|\u22DA\uFE00|\u22DB\uFE00|\u22F5\u0338|\u22F9\u0338|\u2933\u0338|\u29CF\u0338|\u29D0\u0338|\u2A6D\u0338|\u2A70\u0338|\u2A7D\u0338|\u2A7E\u0338|\u2AA1\u0338|\u2AA2\u0338|\u2AAC\uFE00|\u2AAD\uFE00|\u2AAF\u0338|\u2AB0\u0338|\u2AC5\u0338|\u2AC6\u0338|\u2ACB\uFE00|\u2ACC\uFE00|\u2AFD\u20E5|[\xA0-\u0113\u0116-\u0122\u0124-\u012B\u012E-\u014D\u0150-\u017E\u0192\u01B5\u01F5\u0237\u02C6\u02C7\u02D8-\u02DD\u0311\u0391-\u03A1\u03A3-\u03A9\u03B1-\u03C9\u03D1\u03D2\u03D5\u03D6\u03DC\u03DD\u03F0\u03F1\u03F5\u03F6\u0401-\u040C\u040E-\u044F\u0451-\u045C\u045E\u045F\u2002-\u2005\u2007-\u2010\u2013-\u2016\u2018-\u201A\u201C-\u201E\u2020-\u2022\u2025\u2026\u2030-\u2035\u2039\u203A\u203E\u2041\u2043\u2044\u204F\u2057\u205F-\u2063\u20AC\u20DB\u20DC\u2102\u2105\u210A-\u2113\u2115-\u211E\u2122\u2124\u2127-\u2129\u212C\u212D\u212F-\u2131\u2133-\u2138\u2145-\u2148\u2153-\u215E\u2190-\u219B\u219D-\u21A7\u21A9-\u21AE\u21B0-\u21B3\u21B5-\u21B7\u21BA-\u21DB\u21DD\u21E4\u21E5\u21F5\u21FD-\u2205\u2207-\u2209\u220B\u220C\u220F-\u2214\u2216-\u2218\u221A\u221D-\u2238\u223A-\u2257\u2259\u225A\u225C\u225F-\u2262\u2264-\u228B\u228D-\u229B\u229D-\u22A5\u22A7-\u22B0\u22B2-\u22BB\u22BD-\u22DB\u22DE-\u22E3\u22E6-\u22F7\u22F9-\u22FE\u2305\u2306\u2308-\u2310\u2312\u2313\u2315\u2316\u231C-\u231F\u2322\u2323\u232D\u232E\u2336\u233D\u233F\u237C\u23B0\u23B1\u23B4-\u23B6\u23DC-\u23DF\u23E2\u23E7\u2423\u24C8\u2500\u2502\u250C\u2510\u2514\u2518\u251C\u2524\u252C\u2534\u253C\u2550-\u256C\u2580\u2584\u2588\u2591-\u2593\u25A1\u25AA\u25AB\u25AD\u25AE\u25B1\u25B3-\u25B5\u25B8\u25B9\u25BD-\u25BF\u25C2\u25C3\u25CA\u25CB\u25EC\u25EF\u25F8-\u25FC\u2605\u2606\u260E\u2640\u2642\u2660\u2663\u2665\u2666\u266A\u266D-\u266F\u2713\u2717\u2720\u2736\u2758\u2772\u2773\u27C8\u27C9\u27E6-\u27ED\u27F5-\u27FA\u27FC\u27FF\u2902-\u2905\u290C-\u2913\u2916\u2919-\u2920\u2923-\u292A\u2933\u2935-\u2939\u293C\u293D\u2945\u2948-\u294B\u294E-\u2976\u2978\u2979\u297B-\u297F\u2985\u2986\u298B-\u2996\u299A\u299C\u299D\u29A4-\u29B7\u29B9\u29BB\u29BC\u29BE-\u29C5\u29C9\u29CD-\u29D0\u29DC-\u29DE\u29E3-\u29E5\u29EB\u29F4\u29F6\u2A00-\u2A02\u2A04\u2A06\u2A0C\u2A0D\u2A10-\u2A17\u2A22-\u2A27\u2A29\u2A2A\u2A2D-\u2A31\u2A33-\u2A3C\u2A3F\u2A40\u2A42-\u2A4D\u2A50\u2A53-\u2A58\u2A5A-\u2A5D\u2A5F\u2A66\u2A6A\u2A6D-\u2A75\u2A77-\u2A9A\u2A9D-\u2AA2\u2AA4-\u2AB0\u2AB3-\u2AC8\u2ACB\u2ACC\u2ACF-\u2ADB\u2AE4\u2AE6-\u2AE9\u2AEB-\u2AF3\u2AFD\uFB00-\uFB04]|\uD835[\uDC9C\uDC9E\uDC9F\uDCA2\uDCA5\uDCA6\uDCA9-\uDCAC\uDCAE-\uDCB9\uDCBB\uDCBD-\uDCC3\uDCC5-\uDCCF\uDD04\uDD05\uDD07-\uDD0A\uDD0D-\uDD14\uDD16-\uDD1C\uDD1E-\uDD39\uDD3B-\uDD3E\uDD40-\uDD44\uDD46\uDD4A-\uDD50\uDD52-\uDD6B]/g,
                    d = {
                        "Á": "Aacute",
                        "á": "aacute",
                        "Ă": "Abreve",
                        "ă": "abreve",
                        "∾": "ac",
                        "∿": "acd",
                        "∾̳": "acE",
                        "Â": "Acirc",
                        "â": "acirc",
                        "´": "acute",
                        "А": "Acy",
                        "а": "acy",
                        "Æ": "AElig",
                        "æ": "aelig",
                        "⁡": "af",
                        "𝔄": "Afr",
                        "𝔞": "afr",
                        "À": "Agrave",
                        "à": "agrave",
                        "ℵ": "aleph",
                        "Α": "Alpha",
                        "α": "alpha",
                        "Ā": "Amacr",
                        "ā": "amacr",
                        "⨿": "amalg",
                        "&": "amp",
                        "⩕": "andand",
                        "⩓": "And",
                        "∧": "and",
                        "⩜": "andd",
                        "⩘": "andslope",
                        "⩚": "andv",
                        "∠": "ang",
                        "⦤": "ange",
                        "⦨": "angmsdaa",
                        "⦩": "angmsdab",
                        "⦪": "angmsdac",
                        "⦫": "angmsdad",
                        "⦬": "angmsdae",
                        "⦭": "angmsdaf",
                        "⦮": "angmsdag",
                        "⦯": "angmsdah",
                        "∡": "angmsd",
                        "∟": "angrt",
                        "⊾": "angrtvb",
                        "⦝": "angrtvbd",
                        "∢": "angsph",
                        "Å": "angst",
                        "⍼": "angzarr",
                        "Ą": "Aogon",
                        "ą": "aogon",
                        "𝔸": "Aopf",
                        "𝕒": "aopf",
                        "⩯": "apacir",
                        "≈": "ap",
                        "⩰": "apE",
                        "≊": "ape",
                        "≋": "apid",
                        "'": "apos",
                        "å": "aring",
                        "𝒜": "Ascr",
                        "𝒶": "ascr",
                        "≔": "colone",
                        "*": "ast",
                        "≍": "CupCap",
                        "Ã": "Atilde",
                        "ã": "atilde",
                        "Ä": "Auml",
                        "ä": "auml",
                        "∳": "awconint",
                        "⨑": "awint",
                        "≌": "bcong",
                        "϶": "bepsi",
                        "‵": "bprime",
                        "∽": "bsim",
                        "⋍": "bsime",
                        "∖": "setmn",
                        "⫧": "Barv",
                        "⊽": "barvee",
                        "⌅": "barwed",
                        "⌆": "Barwed",
                        "⎵": "bbrk",
                        "⎶": "bbrktbrk",
                        "Б": "Bcy",
                        "б": "bcy",
                        "„": "bdquo",
                        "∵": "becaus",
                        "⦰": "bemptyv",
                        "ℬ": "Bscr",
                        "Β": "Beta",
                        "β": "beta",
                        "ℶ": "beth",
                        "≬": "twixt",
                        "𝔅": "Bfr",
                        "𝔟": "bfr",
                        "⋂": "xcap",
                        "◯": "xcirc",
                        "⋃": "xcup",
                        "⨀": "xodot",
                        "⨁": "xoplus",
                        "⨂": "xotime",
                        "⨆": "xsqcup",
                        "★": "starf",
                        "▽": "xdtri",
                        "△": "xutri",
                        "⨄": "xuplus",
                        "⋁": "Vee",
                        "⋀": "Wedge",
                        "⤍": "rbarr",
                        "⧫": "lozf",
                        "▪": "squf",
                        "▴": "utrif",
                        "▾": "dtrif",
                        "◂": "ltrif",
                        "▸": "rtrif",
                        "␣": "blank",
                        "▒": "blk12",
                        "░": "blk14",
                        "▓": "blk34",
                        "█": "block",
                        "=⃥": "bne",
                        "≡⃥": "bnequiv",
                        "⫭": "bNot",
                        "⌐": "bnot",
                        "𝔹": "Bopf",
                        "𝕓": "bopf",
                        "⊥": "bot",
                        "⋈": "bowtie",
                        "⧉": "boxbox",
                        "┐": "boxdl",
                        "╕": "boxdL",
                        "╖": "boxDl",
                        "╗": "boxDL",
                        "┌": "boxdr",
                        "╒": "boxdR",
                        "╓": "boxDr",
                        "╔": "boxDR",
                        "─": "boxh",
                        "═": "boxH",
                        "┬": "boxhd",
                        "╤": "boxHd",
                        "╥": "boxhD",
                        "╦": "boxHD",
                        "┴": "boxhu",
                        "╧": "boxHu",
                        "╨": "boxhU",
                        "╩": "boxHU",
                        "⊟": "minusb",
                        "⊞": "plusb",
                        "⊠": "timesb",
                        "┘": "boxul",
                        "╛": "boxuL",
                        "╜": "boxUl",
                        "╝": "boxUL",
                        "└": "boxur",
                        "╘": "boxuR",
                        "╙": "boxUr",
                        "╚": "boxUR",
                        "│": "boxv",
                        "║": "boxV",
                        "┼": "boxvh",
                        "╪": "boxvH",
                        "╫": "boxVh",
                        "╬": "boxVH",
                        "┤": "boxvl",
                        "╡": "boxvL",
                        "╢": "boxVl",
                        "╣": "boxVL",
                        "├": "boxvr",
                        "╞": "boxvR",
                        "╟": "boxVr",
                        "╠": "boxVR",
                        "˘": "breve",
                        "¦": "brvbar",
                        "𝒷": "bscr",
                        "⁏": "bsemi",
                        "⧅": "bsolb",
                        "\\": "bsol",
                        "⟈": "bsolhsub",
                        "•": "bull",
                        "≎": "bump",
                        "⪮": "bumpE",
                        "≏": "bumpe",
                        "Ć": "Cacute",
                        "ć": "cacute",
                        "⩄": "capand",
                        "⩉": "capbrcup",
                        "⩋": "capcap",
                        "∩": "cap",
                        "⋒": "Cap",
                        "⩇": "capcup",
                        "⩀": "capdot",
                        "ⅅ": "DD",
                        "∩︀": "caps",
                        "⁁": "caret",
                        "ˇ": "caron",
                        "ℭ": "Cfr",
                        "⩍": "ccaps",
                        "Č": "Ccaron",
                        "č": "ccaron",
                        "Ç": "Ccedil",
                        "ç": "ccedil",
                        "Ĉ": "Ccirc",
                        "ĉ": "ccirc",
                        "∰": "Cconint",
                        "⩌": "ccups",
                        "⩐": "ccupssm",
                        "Ċ": "Cdot",
                        "ċ": "cdot",
                        "¸": "cedil",
                        "⦲": "cemptyv",
                        "¢": "cent",
                        "·": "middot",
                        "𝔠": "cfr",
                        "Ч": "CHcy",
                        "ч": "chcy",
                        "✓": "check",
                        "Χ": "Chi",
                        "χ": "chi",
                        "ˆ": "circ",
                        "≗": "cire",
                        "↺": "olarr",
                        "↻": "orarr",
                        "⊛": "oast",
                        "⊚": "ocir",
                        "⊝": "odash",
                        "⊙": "odot",
                        "®": "reg",
                        "Ⓢ": "oS",
                        "⊖": "ominus",
                        "⊕": "oplus",
                        "⊗": "otimes",
                        "○": "cir",
                        "⧃": "cirE",
                        "⨐": "cirfnint",
                        "⫯": "cirmid",
                        "⧂": "cirscir",
                        "∲": "cwconint",
                        "”": "rdquo",
                        "’": "rsquo",
                        "♣": "clubs",
                        ":": "colon",
                        "∷": "Colon",
                        "⩴": "Colone",
                        ",": "comma",
                        "@": "commat",
                        "∁": "comp",
                        "∘": "compfn",
                        "ℂ": "Copf",
                        "≅": "cong",
                        "⩭": "congdot",
                        "≡": "equiv",
                        "∮": "oint",
                        "∯": "Conint",
                        "𝕔": "copf",
                        "∐": "coprod",
                        "©": "copy",
                        "℗": "copysr",
                        "↵": "crarr",
                        "✗": "cross",
                        "⨯": "Cross",
                        "𝒞": "Cscr",
                        "𝒸": "cscr",
                        "⫏": "csub",
                        "⫑": "csube",
                        "⫐": "csup",
                        "⫒": "csupe",
                        "⋯": "ctdot",
                        "⤸": "cudarrl",
                        "⤵": "cudarrr",
                        "⋞": "cuepr",
                        "⋟": "cuesc",
                        "↶": "cularr",
                        "⤽": "cularrp",
                        "⩈": "cupbrcap",
                        "⩆": "cupcap",
                        "∪": "cup",
                        "⋓": "Cup",
                        "⩊": "cupcup",
                        "⊍": "cupdot",
                        "⩅": "cupor",
                        "∪︀": "cups",
                        "↷": "curarr",
                        "⤼": "curarrm",
                        "⋎": "cuvee",
                        "⋏": "cuwed",
                        "¤": "curren",
                        "∱": "cwint",
                        "⌭": "cylcty",
                        "†": "dagger",
                        "‡": "Dagger",
                        "ℸ": "daleth",
                        "↓": "darr",
                        "↡": "Darr",
                        "⇓": "dArr",
                        "‐": "dash",
                        "⫤": "Dashv",
                        "⊣": "dashv",
                        "⤏": "rBarr",
                        "˝": "dblac",
                        "Ď": "Dcaron",
                        "ď": "dcaron",
                        "Д": "Dcy",
                        "д": "dcy",
                        "⇊": "ddarr",
                        "ⅆ": "dd",
                        "⤑": "DDotrahd",
                        "⩷": "eDDot",
                        "°": "deg",
                        "∇": "Del",
                        "Δ": "Delta",
                        "δ": "delta",
                        "⦱": "demptyv",
                        "⥿": "dfisht",
                        "𝔇": "Dfr",
                        "𝔡": "dfr",
                        "⥥": "dHar",
                        "⇃": "dharl",
                        "⇂": "dharr",
                        "˙": "dot",
                        "`": "grave",
                        "˜": "tilde",
                        "⋄": "diam",
                        "♦": "diams",
                        "¨": "die",
                        "ϝ": "gammad",
                        "⋲": "disin",
                        "÷": "div",
                        "⋇": "divonx",
                        "Ђ": "DJcy",
                        "ђ": "djcy",
                        "⌞": "dlcorn",
                        "⌍": "dlcrop",
                        $: "dollar",
                        "𝔻": "Dopf",
                        "𝕕": "dopf",
                        "⃜": "DotDot",
                        "≐": "doteq",
                        "≑": "eDot",
                        "∸": "minusd",
                        "∔": "plusdo",
                        "⊡": "sdotb",
                        "⇐": "lArr",
                        "⇔": "iff",
                        "⟸": "xlArr",
                        "⟺": "xhArr",
                        "⟹": "xrArr",
                        "⇒": "rArr",
                        "⊨": "vDash",
                        "⇑": "uArr",
                        "⇕": "vArr",
                        "∥": "par",
                        "⤓": "DownArrowBar",
                        "⇵": "duarr",
                        "̑": "DownBreve",
                        "⥐": "DownLeftRightVector",
                        "⥞": "DownLeftTeeVector",
                        "⥖": "DownLeftVectorBar",
                        "↽": "lhard",
                        "⥟": "DownRightTeeVector",
                        "⥗": "DownRightVectorBar",
                        "⇁": "rhard",
                        "↧": "mapstodown",
                        "⊤": "top",
                        "⤐": "RBarr",
                        "⌟": "drcorn",
                        "⌌": "drcrop",
                        "𝒟": "Dscr",
                        "𝒹": "dscr",
                        "Ѕ": "DScy",
                        "ѕ": "dscy",
                        "⧶": "dsol",
                        "Đ": "Dstrok",
                        "đ": "dstrok",
                        "⋱": "dtdot",
                        "▿": "dtri",
                        "⥯": "duhar",
                        "⦦": "dwangle",
                        "Џ": "DZcy",
                        "џ": "dzcy",
                        "⟿": "dzigrarr",
                        "É": "Eacute",
                        "é": "eacute",
                        "⩮": "easter",
                        "Ě": "Ecaron",
                        "ě": "ecaron",
                        "Ê": "Ecirc",
                        "ê": "ecirc",
                        "≖": "ecir",
                        "≕": "ecolon",
                        "Э": "Ecy",
                        "э": "ecy",
                        "Ė": "Edot",
                        "ė": "edot",
                        "ⅇ": "ee",
                        "≒": "efDot",
                        "𝔈": "Efr",
                        "𝔢": "efr",
                        "⪚": "eg",
                        "È": "Egrave",
                        "è": "egrave",
                        "⪖": "egs",
                        "⪘": "egsdot",
                        "⪙": "el",
                        "∈": "in",
                        "⏧": "elinters",
                        "ℓ": "ell",
                        "⪕": "els",
                        "⪗": "elsdot",
                        "Ē": "Emacr",
                        "ē": "emacr",
                        "∅": "empty",
                        "◻": "EmptySmallSquare",
                        "▫": "EmptyVerySmallSquare",
                        " ": "emsp13",
                        " ": "emsp14",
                        " ": "emsp",
                        "Ŋ": "ENG",
                        "ŋ": "eng",
                        " ": "ensp",
                        "Ę": "Eogon",
                        "ę": "eogon",
                        "𝔼": "Eopf",
                        "𝕖": "eopf",
                        "⋕": "epar",
                        "⧣": "eparsl",
                        "⩱": "eplus",
                        "ε": "epsi",
                        "Ε": "Epsilon",
                        "ϵ": "epsiv",
                        "≂": "esim",
                        "⩵": "Equal",
                        "=": "equals",
                        "≟": "equest",
                        "⇌": "rlhar",
                        "⩸": "equivDD",
                        "⧥": "eqvparsl",
                        "⥱": "erarr",
                        "≓": "erDot",
                        "ℯ": "escr",
                        "ℰ": "Escr",
                        "⩳": "Esim",
                        "Η": "Eta",
                        "η": "eta",
                        "Ð": "ETH",
                        "ð": "eth",
                        "Ë": "Euml",
                        "ë": "euml",
                        "€": "euro",
                        "!": "excl",
                        "∃": "exist",
                        "Ф": "Fcy",
                        "ф": "fcy",
                        "♀": "female",
                        "ﬃ": "ffilig",
                        "ﬀ": "fflig",
                        "ﬄ": "ffllig",
                        "𝔉": "Ffr",
                        "𝔣": "ffr",
                        "ﬁ": "filig",
                        "◼": "FilledSmallSquare",
                        fj: "fjlig",
                        "♭": "flat",
                        "ﬂ": "fllig",
                        "▱": "fltns",
                        "ƒ": "fnof",
                        "𝔽": "Fopf",
                        "𝕗": "fopf",
                        "∀": "forall",
                        "⋔": "fork",
                        "⫙": "forkv",
                        "ℱ": "Fscr",
                        "⨍": "fpartint",
                        "½": "half",
                        "⅓": "frac13",
                        "¼": "frac14",
                        "⅕": "frac15",
                        "⅙": "frac16",
                        "⅛": "frac18",
                        "⅔": "frac23",
                        "⅖": "frac25",
                        "¾": "frac34",
                        "⅗": "frac35",
                        "⅜": "frac38",
                        "⅘": "frac45",
                        "⅚": "frac56",
                        "⅝": "frac58",
                        "⅞": "frac78",
                        "⁄": "frasl",
                        "⌢": "frown",
                        "𝒻": "fscr",
                        "ǵ": "gacute",
                        "Γ": "Gamma",
                        "γ": "gamma",
                        "Ϝ": "Gammad",
                        "⪆": "gap",
                        "Ğ": "Gbreve",
                        "ğ": "gbreve",
                        "Ģ": "Gcedil",
                        "Ĝ": "Gcirc",
                        "ĝ": "gcirc",
                        "Г": "Gcy",
                        "г": "gcy",
                        "Ġ": "Gdot",
                        "ġ": "gdot",
                        "≥": "ge",
                        "≧": "gE",
                        "⪌": "gEl",
                        "⋛": "gel",
                        "⩾": "ges",
                        "⪩": "gescc",
                        "⪀": "gesdot",
                        "⪂": "gesdoto",
                        "⪄": "gesdotol",
                        "⋛︀": "gesl",
                        "⪔": "gesles",
                        "𝔊": "Gfr",
                        "𝔤": "gfr",
                        "≫": "gg",
                        "⋙": "Gg",
                        "ℷ": "gimel",
                        "Ѓ": "GJcy",
                        "ѓ": "gjcy",
                        "⪥": "gla",
                        "≷": "gl",
                        "⪒": "glE",
                        "⪤": "glj",
                        "⪊": "gnap",
                        "⪈": "gne",
                        "≩": "gnE",
                        "⋧": "gnsim",
                        "𝔾": "Gopf",
                        "𝕘": "gopf",
                        "⪢": "GreaterGreater",
                        "≳": "gsim",
                        "𝒢": "Gscr",
                        "ℊ": "gscr",
                        "⪎": "gsime",
                        "⪐": "gsiml",
                        "⪧": "gtcc",
                        "⩺": "gtcir",
                        ">": "gt",
                        "⋗": "gtdot",
                        "⦕": "gtlPar",
                        "⩼": "gtquest",
                        "⥸": "gtrarr",
                        "≩︀": "gvnE",
                        " ": "hairsp",
                        "ℋ": "Hscr",
                        "Ъ": "HARDcy",
                        "ъ": "hardcy",
                        "⥈": "harrcir",
                        "↔": "harr",
                        "↭": "harrw",
                        "^": "Hat",
                        "ℏ": "hbar",
                        "Ĥ": "Hcirc",
                        "ĥ": "hcirc",
                        "♥": "hearts",
                        "…": "mldr",
                        "⊹": "hercon",
                        "𝔥": "hfr",
                        "ℌ": "Hfr",
                        "⤥": "searhk",
                        "⤦": "swarhk",
                        "⇿": "hoarr",
                        "∻": "homtht",
                        "↩": "larrhk",
                        "↪": "rarrhk",
                        "𝕙": "hopf",
                        "ℍ": "Hopf",
                        "―": "horbar",
                        "𝒽": "hscr",
                        "Ħ": "Hstrok",
                        "ħ": "hstrok",
                        "⁃": "hybull",
                        "Í": "Iacute",
                        "í": "iacute",
                        "⁣": "ic",
                        "Î": "Icirc",
                        "î": "icirc",
                        "И": "Icy",
                        "и": "icy",
                        "İ": "Idot",
                        "Е": "IEcy",
                        "е": "iecy",
                        "¡": "iexcl",
                        "𝔦": "ifr",
                        "ℑ": "Im",
                        "Ì": "Igrave",
                        "ì": "igrave",
                        "ⅈ": "ii",
                        "⨌": "qint",
                        "∭": "tint",
                        "⧜": "iinfin",
                        "℩": "iiota",
                        "Ĳ": "IJlig",
                        "ĳ": "ijlig",
                        "Ī": "Imacr",
                        "ī": "imacr",
                        "ℐ": "Iscr",
                        "ı": "imath",
                        "⊷": "imof",
                        "Ƶ": "imped",
                        "℅": "incare",
                        "∞": "infin",
                        "⧝": "infintie",
                        "⊺": "intcal",
                        "∫": "int",
                        "∬": "Int",
                        "ℤ": "Zopf",
                        "⨗": "intlarhk",
                        "⨼": "iprod",
                        "⁢": "it",
                        "Ё": "IOcy",
                        "ё": "iocy",
                        "Į": "Iogon",
                        "į": "iogon",
                        "𝕀": "Iopf",
                        "𝕚": "iopf",
                        "Ι": "Iota",
                        "ι": "iota",
                        "¿": "iquest",
                        "𝒾": "iscr",
                        "⋵": "isindot",
                        "⋹": "isinE",
                        "⋴": "isins",
                        "⋳": "isinsv",
                        "Ĩ": "Itilde",
                        "ĩ": "itilde",
                        "І": "Iukcy",
                        "і": "iukcy",
                        "Ï": "Iuml",
                        "ï": "iuml",
                        "Ĵ": "Jcirc",
                        "ĵ": "jcirc",
                        "Й": "Jcy",
                        "й": "jcy",
                        "𝔍": "Jfr",
                        "𝔧": "jfr",
                        "ȷ": "jmath",
                        "𝕁": "Jopf",
                        "𝕛": "jopf",
                        "𝒥": "Jscr",
                        "𝒿": "jscr",
                        "Ј": "Jsercy",
                        "ј": "jsercy",
                        "Є": "Jukcy",
                        "є": "jukcy",
                        "Κ": "Kappa",
                        "κ": "kappa",
                        "ϰ": "kappav",
                        "Ķ": "Kcedil",
                        "ķ": "kcedil",
                        "К": "Kcy",
                        "к": "kcy",
                        "𝔎": "Kfr",
                        "𝔨": "kfr",
                        "ĸ": "kgreen",
                        "Х": "KHcy",
                        "х": "khcy",
                        "Ќ": "KJcy",
                        "ќ": "kjcy",
                        "𝕂": "Kopf",
                        "𝕜": "kopf",
                        "𝒦": "Kscr",
                        "𝓀": "kscr",
                        "⇚": "lAarr",
                        "Ĺ": "Lacute",
                        "ĺ": "lacute",
                        "⦴": "laemptyv",
                        "ℒ": "Lscr",
                        "Λ": "Lambda",
                        "λ": "lambda",
                        "⟨": "lang",
                        "⟪": "Lang",
                        "⦑": "langd",
                        "⪅": "lap",
                        "«": "laquo",
                        "⇤": "larrb",
                        "⤟": "larrbfs",
                        "←": "larr",
                        "↞": "Larr",
                        "⤝": "larrfs",
                        "↫": "larrlp",
                        "⤹": "larrpl",
                        "⥳": "larrsim",
                        "↢": "larrtl",
                        "⤙": "latail",
                        "⤛": "lAtail",
                        "⪫": "lat",
                        "⪭": "late",
                        "⪭︀": "lates",
                        "⤌": "lbarr",
                        "⤎": "lBarr",
                        "❲": "lbbrk",
                        "{": "lcub",
                        "[": "lsqb",
                        "⦋": "lbrke",
                        "⦏": "lbrksld",
                        "⦍": "lbrkslu",
                        "Ľ": "Lcaron",
                        "ľ": "lcaron",
                        "Ļ": "Lcedil",
                        "ļ": "lcedil",
                        "⌈": "lceil",
                        "Л": "Lcy",
                        "л": "lcy",
                        "⤶": "ldca",
                        "“": "ldquo",
                        "⥧": "ldrdhar",
                        "⥋": "ldrushar",
                        "↲": "ldsh",
                        "≤": "le",
                        "≦": "lE",
                        "⇆": "lrarr",
                        "⟦": "lobrk",
                        "⥡": "LeftDownTeeVector",
                        "⥙": "LeftDownVectorBar",
                        "⌊": "lfloor",
                        "↼": "lharu",
                        "⇇": "llarr",
                        "⇋": "lrhar",
                        "⥎": "LeftRightVector",
                        "↤": "mapstoleft",
                        "⥚": "LeftTeeVector",
                        "⋋": "lthree",
                        "⧏": "LeftTriangleBar",
                        "⊲": "vltri",
                        "⊴": "ltrie",
                        "⥑": "LeftUpDownVector",
                        "⥠": "LeftUpTeeVector",
                        "⥘": "LeftUpVectorBar",
                        "↿": "uharl",
                        "⥒": "LeftVectorBar",
                        "⪋": "lEg",
                        "⋚": "leg",
                        "⩽": "les",
                        "⪨": "lescc",
                        "⩿": "lesdot",
                        "⪁": "lesdoto",
                        "⪃": "lesdotor",
                        "⋚︀": "lesg",
                        "⪓": "lesges",
                        "⋖": "ltdot",
                        "≶": "lg",
                        "⪡": "LessLess",
                        "≲": "lsim",
                        "⥼": "lfisht",
                        "𝔏": "Lfr",
                        "𝔩": "lfr",
                        "⪑": "lgE",
                        "⥢": "lHar",
                        "⥪": "lharul",
                        "▄": "lhblk",
                        "Љ": "LJcy",
                        "љ": "ljcy",
                        "≪": "ll",
                        "⋘": "Ll",
                        "⥫": "llhard",
                        "◺": "lltri",
                        "Ŀ": "Lmidot",
                        "ŀ": "lmidot",
                        "⎰": "lmoust",
                        "⪉": "lnap",
                        "⪇": "lne",
                        "≨": "lnE",
                        "⋦": "lnsim",
                        "⟬": "loang",
                        "⇽": "loarr",
                        "⟵": "xlarr",
                        "⟷": "xharr",
                        "⟼": "xmap",
                        "⟶": "xrarr",
                        "↬": "rarrlp",
                        "⦅": "lopar",
                        "𝕃": "Lopf",
                        "𝕝": "lopf",
                        "⨭": "loplus",
                        "⨴": "lotimes",
                        "∗": "lowast",
                        _: "lowbar",
                        "↙": "swarr",
                        "↘": "searr",
                        "◊": "loz",
                        "(": "lpar",
                        "⦓": "lparlt",
                        "⥭": "lrhard",
                        "‎": "lrm",
                        "⊿": "lrtri",
                        "‹": "lsaquo",
                        "𝓁": "lscr",
                        "↰": "lsh",
                        "⪍": "lsime",
                        "⪏": "lsimg",
                        "‘": "lsquo",
                        "‚": "sbquo",
                        "Ł": "Lstrok",
                        "ł": "lstrok",
                        "⪦": "ltcc",
                        "⩹": "ltcir",
                        "<": "lt",
                        "⋉": "ltimes",
                        "⥶": "ltlarr",
                        "⩻": "ltquest",
                        "◃": "ltri",
                        "⦖": "ltrPar",
                        "⥊": "lurdshar",
                        "⥦": "luruhar",
                        "≨︀": "lvnE",
                        "¯": "macr",
                        "♂": "male",
                        "✠": "malt",
                        "⤅": "Map",
                        "↦": "map",
                        "↥": "mapstoup",
                        "▮": "marker",
                        "⨩": "mcomma",
                        "М": "Mcy",
                        "м": "mcy",
                        "—": "mdash",
                        "∺": "mDDot",
                        " ": "MediumSpace",
                        "ℳ": "Mscr",
                        "𝔐": "Mfr",
                        "𝔪": "mfr",
                        "℧": "mho",
                        "µ": "micro",
                        "⫰": "midcir",
                        "∣": "mid",
                        "−": "minus",
                        "⨪": "minusdu",
                        "∓": "mp",
                        "⫛": "mlcp",
                        "⊧": "models",
                        "𝕄": "Mopf",
                        "𝕞": "mopf",
                        "𝓂": "mscr",
                        "Μ": "Mu",
                        "μ": "mu",
                        "⊸": "mumap",
                        "Ń": "Nacute",
                        "ń": "nacute",
                        "∠⃒": "nang",
                        "≉": "nap",
                        "⩰̸": "napE",
                        "≋̸": "napid",
                        "ŉ": "napos",
                        "♮": "natur",
                        "ℕ": "Nopf",
                        " ": "nbsp",
                        "≎̸": "nbump",
                        "≏̸": "nbumpe",
                        "⩃": "ncap",
                        "Ň": "Ncaron",
                        "ň": "ncaron",
                        "Ņ": "Ncedil",
                        "ņ": "ncedil",
                        "≇": "ncong",
                        "⩭̸": "ncongdot",
                        "⩂": "ncup",
                        "Н": "Ncy",
                        "н": "ncy",
                        "–": "ndash",
                        "⤤": "nearhk",
                        "↗": "nearr",
                        "⇗": "neArr",
                        "≠": "ne",
                        "≐̸": "nedot",
                        "​": "ZeroWidthSpace",
                        "≢": "nequiv",
                        "⤨": "toea",
                        "≂̸": "nesim",
                        "\n": "NewLine",
                        "∄": "nexist",
                        "𝔑": "Nfr",
                        "𝔫": "nfr",
                        "≧̸": "ngE",
                        "≱": "nge",
                        "⩾̸": "nges",
                        "⋙̸": "nGg",
                        "≵": "ngsim",
                        "≫⃒": "nGt",
                        "≯": "ngt",
                        "≫̸": "nGtv",
                        "↮": "nharr",
                        "⇎": "nhArr",
                        "⫲": "nhpar",
                        "∋": "ni",
                        "⋼": "nis",
                        "⋺": "nisd",
                        "Њ": "NJcy",
                        "њ": "njcy",
                        "↚": "nlarr",
                        "⇍": "nlArr",
                        "‥": "nldr",
                        "≦̸": "nlE",
                        "≰": "nle",
                        "⩽̸": "nles",
                        "≮": "nlt",
                        "⋘̸": "nLl",
                        "≴": "nlsim",
                        "≪⃒": "nLt",
                        "⋪": "nltri",
                        "⋬": "nltrie",
                        "≪̸": "nLtv",
                        "∤": "nmid",
                        "⁠": "NoBreak",
                        "𝕟": "nopf",
                        "⫬": "Not",
                        "¬": "not",
                        "≭": "NotCupCap",
                        "∦": "npar",
                        "∉": "notin",
                        "≹": "ntgl",
                        "⋵̸": "notindot",
                        "⋹̸": "notinE",
                        "⋷": "notinvb",
                        "⋶": "notinvc",
                        "⧏̸": "NotLeftTriangleBar",
                        "≸": "ntlg",
                        "⪢̸": "NotNestedGreaterGreater",
                        "⪡̸": "NotNestedLessLess",
                        "∌": "notni",
                        "⋾": "notnivb",
                        "⋽": "notnivc",
                        "⊀": "npr",
                        "⪯̸": "npre",
                        "⋠": "nprcue",
                        "⧐̸": "NotRightTriangleBar",
                        "⋫": "nrtri",
                        "⋭": "nrtrie",
                        "⊏̸": "NotSquareSubset",
                        "⋢": "nsqsube",
                        "⊐̸": "NotSquareSuperset",
                        "⋣": "nsqsupe",
                        "⊂⃒": "vnsub",
                        "⊈": "nsube",
                        "⊁": "nsc",
                        "⪰̸": "nsce",
                        "⋡": "nsccue",
                        "≿̸": "NotSucceedsTilde",
                        "⊃⃒": "vnsup",
                        "⊉": "nsupe",
                        "≁": "nsim",
                        "≄": "nsime",
                        "⫽⃥": "nparsl",
                        "∂̸": "npart",
                        "⨔": "npolint",
                        "⤳̸": "nrarrc",
                        "↛": "nrarr",
                        "⇏": "nrArr",
                        "↝̸": "nrarrw",
                        "𝒩": "Nscr",
                        "𝓃": "nscr",
                        "⊄": "nsub",
                        "⫅̸": "nsubE",
                        "⊅": "nsup",
                        "⫆̸": "nsupE",
                        "Ñ": "Ntilde",
                        "ñ": "ntilde",
                        "Ν": "Nu",
                        "ν": "nu",
                        "#": "num",
                        "№": "numero",
                        " ": "numsp",
                        "≍⃒": "nvap",
                        "⊬": "nvdash",
                        "⊭": "nvDash",
                        "⊮": "nVdash",
                        "⊯": "nVDash",
                        "≥⃒": "nvge",
                        ">⃒": "nvgt",
                        "⤄": "nvHarr",
                        "⧞": "nvinfin",
                        "⤂": "nvlArr",
                        "≤⃒": "nvle",
                        "<⃒": "nvlt",
                        "⊴⃒": "nvltrie",
                        "⤃": "nvrArr",
                        "⊵⃒": "nvrtrie",
                        "∼⃒": "nvsim",
                        "⤣": "nwarhk",
                        "↖": "nwarr",
                        "⇖": "nwArr",
                        "⤧": "nwnear",
                        "Ó": "Oacute",
                        "ó": "oacute",
                        "Ô": "Ocirc",
                        "ô": "ocirc",
                        "О": "Ocy",
                        "о": "ocy",
                        "Ő": "Odblac",
                        "ő": "odblac",
                        "⨸": "odiv",
                        "⦼": "odsold",
                        "Œ": "OElig",
                        "œ": "oelig",
                        "⦿": "ofcir",
                        "𝔒": "Ofr",
                        "𝔬": "ofr",
                        "˛": "ogon",
                        "Ò": "Ograve",
                        "ò": "ograve",
                        "⧁": "ogt",
                        "⦵": "ohbar",
                        "Ω": "ohm",
                        "⦾": "olcir",
                        "⦻": "olcross",
                        "‾": "oline",
                        "⧀": "olt",
                        "Ō": "Omacr",
                        "ō": "omacr",
                        "ω": "omega",
                        "Ο": "Omicron",
                        "ο": "omicron",
                        "⦶": "omid",
                        "𝕆": "Oopf",
                        "𝕠": "oopf",
                        "⦷": "opar",
                        "⦹": "operp",
                        "⩔": "Or",
                        "∨": "or",
                        "⩝": "ord",
                        "ℴ": "oscr",
                        "ª": "ordf",
                        "º": "ordm",
                        "⊶": "origof",
                        "⩖": "oror",
                        "⩗": "orslope",
                        "⩛": "orv",
                        "𝒪": "Oscr",
                        "Ø": "Oslash",
                        "ø": "oslash",
                        "⊘": "osol",
                        "Õ": "Otilde",
                        "õ": "otilde",
                        "⨶": "otimesas",
                        "⨷": "Otimes",
                        "Ö": "Ouml",
                        "ö": "ouml",
                        "⌽": "ovbar",
                        "⏞": "OverBrace",
                        "⎴": "tbrk",
                        "⏜": "OverParenthesis",
                        "¶": "para",
                        "⫳": "parsim",
                        "⫽": "parsl",
                        "∂": "part",
                        "П": "Pcy",
                        "п": "pcy",
                        "%": "percnt",
                        ".": "period",
                        "‰": "permil",
                        "‱": "pertenk",
                        "𝔓": "Pfr",
                        "𝔭": "pfr",
                        "Φ": "Phi",
                        "φ": "phi",
                        "ϕ": "phiv",
                        "☎": "phone",
                        "Π": "Pi",
                        "π": "pi",
                        "ϖ": "piv",
                        "ℎ": "planckh",
                        "⨣": "plusacir",
                        "⨢": "pluscir",
                        "+": "plus",
                        "⨥": "plusdu",
                        "⩲": "pluse",
                        "±": "pm",
                        "⨦": "plussim",
                        "⨧": "plustwo",
                        "⨕": "pointint",
                        "𝕡": "popf",
                        "ℙ": "Popf",
                        "£": "pound",
                        "⪷": "prap",
                        "⪻": "Pr",
                        "≺": "pr",
                        "≼": "prcue",
                        "⪯": "pre",
                        "≾": "prsim",
                        "⪹": "prnap",
                        "⪵": "prnE",
                        "⋨": "prnsim",
                        "⪳": "prE",
                        "′": "prime",
                        "″": "Prime",
                        "∏": "prod",
                        "⌮": "profalar",
                        "⌒": "profline",
                        "⌓": "profsurf",
                        "∝": "prop",
                        "⊰": "prurel",
                        "𝒫": "Pscr",
                        "𝓅": "pscr",
                        "Ψ": "Psi",
                        "ψ": "psi",
                        " ": "puncsp",
                        "𝔔": "Qfr",
                        "𝔮": "qfr",
                        "𝕢": "qopf",
                        "ℚ": "Qopf",
                        "⁗": "qprime",
                        "𝒬": "Qscr",
                        "𝓆": "qscr",
                        "⨖": "quatint",
                        "?": "quest",
                        '"': "quot",
                        "⇛": "rAarr",
                        "∽̱": "race",
                        "Ŕ": "Racute",
                        "ŕ": "racute",
                        "√": "Sqrt",
                        "⦳": "raemptyv",
                        "⟩": "rang",
                        "⟫": "Rang",
                        "⦒": "rangd",
                        "⦥": "range",
                        "»": "raquo",
                        "⥵": "rarrap",
                        "⇥": "rarrb",
                        "⤠": "rarrbfs",
                        "⤳": "rarrc",
                        "→": "rarr",
                        "↠": "Rarr",
                        "⤞": "rarrfs",
                        "⥅": "rarrpl",
                        "⥴": "rarrsim",
                        "⤖": "Rarrtl",
                        "↣": "rarrtl",
                        "↝": "rarrw",
                        "⤚": "ratail",
                        "⤜": "rAtail",
                        "∶": "ratio",
                        "❳": "rbbrk",
                        "}": "rcub",
                        "]": "rsqb",
                        "⦌": "rbrke",
                        "⦎": "rbrksld",
                        "⦐": "rbrkslu",
                        "Ř": "Rcaron",
                        "ř": "rcaron",
                        "Ŗ": "Rcedil",
                        "ŗ": "rcedil",
                        "⌉": "rceil",
                        "Р": "Rcy",
                        "р": "rcy",
                        "⤷": "rdca",
                        "⥩": "rdldhar",
                        "↳": "rdsh",
                        "ℜ": "Re",
                        "ℛ": "Rscr",
                        "ℝ": "Ropf",
                        "▭": "rect",
                        "⥽": "rfisht",
                        "⌋": "rfloor",
                        "𝔯": "rfr",
                        "⥤": "rHar",
                        "⇀": "rharu",
                        "⥬": "rharul",
                        "Ρ": "Rho",
                        "ρ": "rho",
                        "ϱ": "rhov",
                        "⇄": "rlarr",
                        "⟧": "robrk",
                        "⥝": "RightDownTeeVector",
                        "⥕": "RightDownVectorBar",
                        "⇉": "rrarr",
                        "⊢": "vdash",
                        "⥛": "RightTeeVector",
                        "⋌": "rthree",
                        "⧐": "RightTriangleBar",
                        "⊳": "vrtri",
                        "⊵": "rtrie",
                        "⥏": "RightUpDownVector",
                        "⥜": "RightUpTeeVector",
                        "⥔": "RightUpVectorBar",
                        "↾": "uharr",
                        "⥓": "RightVectorBar",
                        "˚": "ring",
                        "‏": "rlm",
                        "⎱": "rmoust",
                        "⫮": "rnmid",
                        "⟭": "roang",
                        "⇾": "roarr",
                        "⦆": "ropar",
                        "𝕣": "ropf",
                        "⨮": "roplus",
                        "⨵": "rotimes",
                        "⥰": "RoundImplies",
                        ")": "rpar",
                        "⦔": "rpargt",
                        "⨒": "rppolint",
                        "›": "rsaquo",
                        "𝓇": "rscr",
                        "↱": "rsh",
                        "⋊": "rtimes",
                        "▹": "rtri",
                        "⧎": "rtriltri",
                        "⧴": "RuleDelayed",
                        "⥨": "ruluhar",
                        "℞": "rx",
                        "Ś": "Sacute",
                        "ś": "sacute",
                        "⪸": "scap",
                        "Š": "Scaron",
                        "š": "scaron",
                        "⪼": "Sc",
                        "≻": "sc",
                        "≽": "sccue",
                        "⪰": "sce",
                        "⪴": "scE",
                        "Ş": "Scedil",
                        "ş": "scedil",
                        "Ŝ": "Scirc",
                        "ŝ": "scirc",
                        "⪺": "scnap",
                        "⪶": "scnE",
                        "⋩": "scnsim",
                        "⨓": "scpolint",
                        "≿": "scsim",
                        "С": "Scy",
                        "с": "scy",
                        "⋅": "sdot",
                        "⩦": "sdote",
                        "⇘": "seArr",
                        "§": "sect",
                        ";": "semi",
                        "⤩": "tosa",
                        "✶": "sext",
                        "𝔖": "Sfr",
                        "𝔰": "sfr",
                        "♯": "sharp",
                        "Щ": "SHCHcy",
                        "щ": "shchcy",
                        "Ш": "SHcy",
                        "ш": "shcy",
                        "↑": "uarr",
                        "­": "shy",
                        "Σ": "Sigma",
                        "σ": "sigma",
                        "ς": "sigmaf",
                        "∼": "sim",
                        "⩪": "simdot",
                        "≃": "sime",
                        "⪞": "simg",
                        "⪠": "simgE",
                        "⪝": "siml",
                        "⪟": "simlE",
                        "≆": "simne",
                        "⨤": "simplus",
                        "⥲": "simrarr",
                        "⨳": "smashp",
                        "⧤": "smeparsl",
                        "⌣": "smile",
                        "⪪": "smt",
                        "⪬": "smte",
                        "⪬︀": "smtes",
                        "Ь": "SOFTcy",
                        "ь": "softcy",
                        "⌿": "solbar",
                        "⧄": "solb",
                        "/": "sol",
                        "𝕊": "Sopf",
                        "𝕤": "sopf",
                        "♠": "spades",
                        "⊓": "sqcap",
                        "⊓︀": "sqcaps",
                        "⊔": "sqcup",
                        "⊔︀": "sqcups",
                        "⊏": "sqsub",
                        "⊑": "sqsube",
                        "⊐": "sqsup",
                        "⊒": "sqsupe",
                        "□": "squ",
                        "𝒮": "Sscr",
                        "𝓈": "sscr",
                        "⋆": "Star",
                        "☆": "star",
                        "⊂": "sub",
                        "⋐": "Sub",
                        "⪽": "subdot",
                        "⫅": "subE",
                        "⊆": "sube",
                        "⫃": "subedot",
                        "⫁": "submult",
                        "⫋": "subnE",
                        "⊊": "subne",
                        "⪿": "subplus",
                        "⥹": "subrarr",
                        "⫇": "subsim",
                        "⫕": "subsub",
                        "⫓": "subsup",
                        "∑": "sum",
                        "♪": "sung",
                        "¹": "sup1",
                        "²": "sup2",
                        "³": "sup3",
                        "⊃": "sup",
                        "⋑": "Sup",
                        "⪾": "supdot",
                        "⫘": "supdsub",
                        "⫆": "supE",
                        "⊇": "supe",
                        "⫄": "supedot",
                        "⟉": "suphsol",
                        "⫗": "suphsub",
                        "⥻": "suplarr",
                        "⫂": "supmult",
                        "⫌": "supnE",
                        "⊋": "supne",
                        "⫀": "supplus",
                        "⫈": "supsim",
                        "⫔": "supsub",
                        "⫖": "supsup",
                        "⇙": "swArr",
                        "⤪": "swnwar",
                        "ß": "szlig",
                        "\t": "Tab",
                        "⌖": "target",
                        "Τ": "Tau",
                        "τ": "tau",
                        "Ť": "Tcaron",
                        "ť": "tcaron",
                        "Ţ": "Tcedil",
                        "ţ": "tcedil",
                        "Т": "Tcy",
                        "т": "tcy",
                        "⃛": "tdot",
                        "⌕": "telrec",
                        "𝔗": "Tfr",
                        "𝔱": "tfr",
                        "∴": "there4",
                        "Θ": "Theta",
                        "θ": "theta",
                        "ϑ": "thetav",
                        "  ": "ThickSpace",
                        " ": "thinsp",
                        "Þ": "THORN",
                        "þ": "thorn",
                        "⨱": "timesbar",
                        "×": "times",
                        "⨰": "timesd",
                        "⌶": "topbot",
                        "⫱": "topcir",
                        "𝕋": "Topf",
                        "𝕥": "topf",
                        "⫚": "topfork",
                        "‴": "tprime",
                        "™": "trade",
                        "▵": "utri",
                        "≜": "trie",
                        "◬": "tridot",
                        "⨺": "triminus",
                        "⨹": "triplus",
                        "⧍": "trisb",
                        "⨻": "tritime",
                        "⏢": "trpezium",
                        "𝒯": "Tscr",
                        "𝓉": "tscr",
                        "Ц": "TScy",
                        "ц": "tscy",
                        "Ћ": "TSHcy",
                        "ћ": "tshcy",
                        "Ŧ": "Tstrok",
                        "ŧ": "tstrok",
                        "Ú": "Uacute",
                        "ú": "uacute",
                        "↟": "Uarr",
                        "⥉": "Uarrocir",
                        "Ў": "Ubrcy",
                        "ў": "ubrcy",
                        "Ŭ": "Ubreve",
                        "ŭ": "ubreve",
                        "Û": "Ucirc",
                        "û": "ucirc",
                        "У": "Ucy",
                        "у": "ucy",
                        "⇅": "udarr",
                        "Ű": "Udblac",
                        "ű": "udblac",
                        "⥮": "udhar",
                        "⥾": "ufisht",
                        "𝔘": "Ufr",
                        "𝔲": "ufr",
                        "Ù": "Ugrave",
                        "ù": "ugrave",
                        "⥣": "uHar",
                        "▀": "uhblk",
                        "⌜": "ulcorn",
                        "⌏": "ulcrop",
                        "◸": "ultri",
                        "Ū": "Umacr",
                        "ū": "umacr",
                        "⏟": "UnderBrace",
                        "⏝": "UnderParenthesis",
                        "⊎": "uplus",
                        "Ų": "Uogon",
                        "ų": "uogon",
                        "𝕌": "Uopf",
                        "𝕦": "uopf",
                        "⤒": "UpArrowBar",
                        "↕": "varr",
                        "υ": "upsi",
                        "ϒ": "Upsi",
                        "Υ": "Upsilon",
                        "⇈": "uuarr",
                        "⌝": "urcorn",
                        "⌎": "urcrop",
                        "Ů": "Uring",
                        "ů": "uring",
                        "◹": "urtri",
                        "𝒰": "Uscr",
                        "𝓊": "uscr",
                        "⋰": "utdot",
                        "Ũ": "Utilde",
                        "ũ": "utilde",
                        "Ü": "Uuml",
                        "ü": "uuml",
                        "⦧": "uwangle",
                        "⦜": "vangrt",
                        "⊊︀": "vsubne",
                        "⫋︀": "vsubnE",
                        "⊋︀": "vsupne",
                        "⫌︀": "vsupnE",
                        "⫨": "vBar",
                        "⫫": "Vbar",
                        "⫩": "vBarv",
                        "В": "Vcy",
                        "в": "vcy",
                        "⊩": "Vdash",
                        "⊫": "VDash",
                        "⫦": "Vdashl",
                        "⊻": "veebar",
                        "≚": "veeeq",
                        "⋮": "vellip",
                        "|": "vert",
                        "‖": "Vert",
                        "❘": "VerticalSeparator",
                        "≀": "wr",
                        "𝔙": "Vfr",
                        "𝔳": "vfr",
                        "𝕍": "Vopf",
                        "𝕧": "vopf",
                        "𝒱": "Vscr",
                        "𝓋": "vscr",
                        "⊪": "Vvdash",
                        "⦚": "vzigzag",
                        "Ŵ": "Wcirc",
                        "ŵ": "wcirc",
                        "⩟": "wedbar",
                        "≙": "wedgeq",
                        "℘": "wp",
                        "𝔚": "Wfr",
                        "𝔴": "wfr",
                        "𝕎": "Wopf",
                        "𝕨": "wopf",
                        "𝒲": "Wscr",
                        "𝓌": "wscr",
                        "𝔛": "Xfr",
                        "𝔵": "xfr",
                        "Ξ": "Xi",
                        "ξ": "xi",
                        "⋻": "xnis",
                        "𝕏": "Xopf",
                        "𝕩": "xopf",
                        "𝒳": "Xscr",
                        "𝓍": "xscr",
                        "Ý": "Yacute",
                        "ý": "yacute",
                        "Я": "YAcy",
                        "я": "yacy",
                        "Ŷ": "Ycirc",
                        "ŷ": "ycirc",
                        "Ы": "Ycy",
                        "ы": "ycy",
                        "¥": "yen",
                        "𝔜": "Yfr",
                        "𝔶": "yfr",
                        "Ї": "YIcy",
                        "ї": "yicy",
                        "𝕐": "Yopf",
                        "𝕪": "yopf",
                        "𝒴": "Yscr",
                        "𝓎": "yscr",
                        "Ю": "YUcy",
                        "ю": "yucy",
                        "ÿ": "yuml",
                        "Ÿ": "Yuml",
                        "Ź": "Zacute",
                        "ź": "zacute",
                        "Ž": "Zcaron",
                        "ž": "zcaron",
                        "З": "Zcy",
                        "з": "zcy",
                        "Ż": "Zdot",
                        "ż": "zdot",
                        "ℨ": "Zfr",
                        "Ζ": "Zeta",
                        "ζ": "zeta",
                        "𝔷": "zfr",
                        "Ж": "ZHcy",
                        "ж": "zhcy",
                        "⇝": "zigrarr",
                        "𝕫": "zopf",
                        "𝒵": "Zscr",
                        "𝓏": "zscr",
                        "‍": "zwj",
                        "‌": "zwnj"
                    },
                    p = /["&'<>`]/g,
                    h = {
                        '"': "&quot;",
                        "&": "&amp;",
                        "'": "&#x27;",
                        "<": "&lt;",
                        ">": "&gt;",
                        "`": "&#x60;"
                    },
                    f = /&#(?:[xX][^a-fA-F0-9]|[^0-9xX])/,
                    g = /[\0-\x08\x0B\x0E-\x1F\x7F-\x9F\uFDD0-\uFDEF\uFFFE\uFFFF]|[\uD83F\uD87F\uD8BF\uD8FF\uD93F\uD97F\uD9BF\uD9FF\uDA3F\uDA7F\uDABF\uDAFF\uDB3F\uDB7F\uDBBF\uDBFF][\uDFFE\uDFFF]|[\uD800-\uDBFF](?![\uDC00-\uDFFF])|(?:[^\uD800-\uDBFF]|^)[\uDC00-\uDFFF]/,
                    m = /&#([0-9]+)(;?)|&#[xX]([a-fA-F0-9]+)(;?)|&([0-9a-zA-Z]+);|&(Aacute|iacute|Uacute|plusmn|otilde|Otilde|Agrave|agrave|yacute|Yacute|oslash|Oslash|Atilde|atilde|brvbar|Ccedil|ccedil|ograve|curren|divide|Eacute|eacute|Ograve|oacute|Egrave|egrave|ugrave|frac12|frac14|frac34|Ugrave|Oacute|Iacute|ntilde|Ntilde|uacute|middot|Igrave|igrave|iquest|aacute|laquo|THORN|micro|iexcl|icirc|Icirc|Acirc|ucirc|ecirc|Ocirc|ocirc|Ecirc|Ucirc|aring|Aring|aelig|AElig|acute|pound|raquo|acirc|times|thorn|szlig|cedil|COPY|Auml|ordf|ordm|uuml|macr|Uuml|auml|Ouml|ouml|para|nbsp|Euml|quot|QUOT|euml|yuml|cent|sect|copy|sup1|sup2|sup3|Iuml|iuml|shy|eth|reg|not|yen|amp|AMP|REG|uml|ETH|deg|gt|GT|LT|lt)([=a-zA-Z0-9])?/g,
                    v = {
                        Aacute: "Á",
                        aacute: "á",
                        Abreve: "Ă",
                        abreve: "ă",
                        ac: "∾",
                        acd: "∿",
                        acE: "∾̳",
                        Acirc: "Â",
                        acirc: "â",
                        acute: "´",
                        Acy: "А",
                        acy: "а",
                        AElig: "Æ",
                        aelig: "æ",
                        af: "⁡",
                        Afr: "𝔄",
                        afr: "𝔞",
                        Agrave: "À",
                        agrave: "à",
                        alefsym: "ℵ",
                        aleph: "ℵ",
                        Alpha: "Α",
                        alpha: "α",
                        Amacr: "Ā",
                        amacr: "ā",
                        amalg: "⨿",
                        amp: "&",
                        AMP: "&",
                        andand: "⩕",
                        And: "⩓",
                        and: "∧",
                        andd: "⩜",
                        andslope: "⩘",
                        andv: "⩚",
                        ang: "∠",
                        ange: "⦤",
                        angle: "∠",
                        angmsdaa: "⦨",
                        angmsdab: "⦩",
                        angmsdac: "⦪",
                        angmsdad: "⦫",
                        angmsdae: "⦬",
                        angmsdaf: "⦭",
                        angmsdag: "⦮",
                        angmsdah: "⦯",
                        angmsd: "∡",
                        angrt: "∟",
                        angrtvb: "⊾",
                        angrtvbd: "⦝",
                        angsph: "∢",
                        angst: "Å",
                        angzarr: "⍼",
                        Aogon: "Ą",
                        aogon: "ą",
                        Aopf: "𝔸",
                        aopf: "𝕒",
                        apacir: "⩯",
                        ap: "≈",
                        apE: "⩰",
                        ape: "≊",
                        apid: "≋",
                        apos: "'",
                        ApplyFunction: "⁡",
                        approx: "≈",
                        approxeq: "≊",
                        Aring: "Å",
                        aring: "å",
                        Ascr: "𝒜",
                        ascr: "𝒶",
                        Assign: "≔",
                        ast: "*",
                        asymp: "≈",
                        asympeq: "≍",
                        Atilde: "Ã",
                        atilde: "ã",
                        Auml: "Ä",
                        auml: "ä",
                        awconint: "∳",
                        awint: "⨑",
                        backcong: "≌",
                        backepsilon: "϶",
                        backprime: "‵",
                        backsim: "∽",
                        backsimeq: "⋍",
                        Backslash: "∖",
                        Barv: "⫧",
                        barvee: "⊽",
                        barwed: "⌅",
                        Barwed: "⌆",
                        barwedge: "⌅",
                        bbrk: "⎵",
                        bbrktbrk: "⎶",
                        bcong: "≌",
                        Bcy: "Б",
                        bcy: "б",
                        bdquo: "„",
                        becaus: "∵",
                        because: "∵",
                        Because: "∵",
                        bemptyv: "⦰",
                        bepsi: "϶",
                        bernou: "ℬ",
                        Bernoullis: "ℬ",
                        Beta: "Β",
                        beta: "β",
                        beth: "ℶ",
                        between: "≬",
                        Bfr: "𝔅",
                        bfr: "𝔟",
                        bigcap: "⋂",
                        bigcirc: "◯",
                        bigcup: "⋃",
                        bigodot: "⨀",
                        bigoplus: "⨁",
                        bigotimes: "⨂",
                        bigsqcup: "⨆",
                        bigstar: "★",
                        bigtriangledown: "▽",
                        bigtriangleup: "△",
                        biguplus: "⨄",
                        bigvee: "⋁",
                        bigwedge: "⋀",
                        bkarow: "⤍",
                        blacklozenge: "⧫",
                        blacksquare: "▪",
                        blacktriangle: "▴",
                        blacktriangledown: "▾",
                        blacktriangleleft: "◂",
                        blacktriangleright: "▸",
                        blank: "␣",
                        blk12: "▒",
                        blk14: "░",
                        blk34: "▓",
                        block: "█",
                        bne: "=⃥",
                        bnequiv: "≡⃥",
                        bNot: "⫭",
                        bnot: "⌐",
                        Bopf: "𝔹",
                        bopf: "𝕓",
                        bot: "⊥",
                        bottom: "⊥",
                        bowtie: "⋈",
                        boxbox: "⧉",
                        boxdl: "┐",
                        boxdL: "╕",
                        boxDl: "╖",
                        boxDL: "╗",
                        boxdr: "┌",
                        boxdR: "╒",
                        boxDr: "╓",
                        boxDR: "╔",
                        boxh: "─",
                        boxH: "═",
                        boxhd: "┬",
                        boxHd: "╤",
                        boxhD: "╥",
                        boxHD: "╦",
                        boxhu: "┴",
                        boxHu: "╧",
                        boxhU: "╨",
                        boxHU: "╩",
                        boxminus: "⊟",
                        boxplus: "⊞",
                        boxtimes: "⊠",
                        boxul: "┘",
                        boxuL: "╛",
                        boxUl: "╜",
                        boxUL: "╝",
                        boxur: "└",
                        boxuR: "╘",
                        boxUr: "╙",
                        boxUR: "╚",
                        boxv: "│",
                        boxV: "║",
                        boxvh: "┼",
                        boxvH: "╪",
                        boxVh: "╫",
                        boxVH: "╬",
                        boxvl: "┤",
                        boxvL: "╡",
                        boxVl: "╢",
                        boxVL: "╣",
                        boxvr: "├",
                        boxvR: "╞",
                        boxVr: "╟",
                        boxVR: "╠",
                        bprime: "‵",
                        breve: "˘",
                        Breve: "˘",
                        brvbar: "¦",
                        bscr: "𝒷",
                        Bscr: "ℬ",
                        bsemi: "⁏",
                        bsim: "∽",
                        bsime: "⋍",
                        bsolb: "⧅",
                        bsol: "\\",
                        bsolhsub: "⟈",
                        bull: "•",
                        bullet: "•",
                        bump: "≎",
                        bumpE: "⪮",
                        bumpe: "≏",
                        Bumpeq: "≎",
                        bumpeq: "≏",
                        Cacute: "Ć",
                        cacute: "ć",
                        capand: "⩄",
                        capbrcup: "⩉",
                        capcap: "⩋",
                        cap: "∩",
                        Cap: "⋒",
                        capcup: "⩇",
                        capdot: "⩀",
                        CapitalDifferentialD: "ⅅ",
                        caps: "∩︀",
                        caret: "⁁",
                        caron: "ˇ",
                        Cayleys: "ℭ",
                        ccaps: "⩍",
                        Ccaron: "Č",
                        ccaron: "č",
                        Ccedil: "Ç",
                        ccedil: "ç",
                        Ccirc: "Ĉ",
                        ccirc: "ĉ",
                        Cconint: "∰",
                        ccups: "⩌",
                        ccupssm: "⩐",
                        Cdot: "Ċ",
                        cdot: "ċ",
                        cedil: "¸",
                        Cedilla: "¸",
                        cemptyv: "⦲",
                        cent: "¢",
                        centerdot: "·",
                        CenterDot: "·",
                        cfr: "𝔠",
                        Cfr: "ℭ",
                        CHcy: "Ч",
                        chcy: "ч",
                        check: "✓",
                        checkmark: "✓",
                        Chi: "Χ",
                        chi: "χ",
                        circ: "ˆ",
                        circeq: "≗",
                        circlearrowleft: "↺",
                        circlearrowright: "↻",
                        circledast: "⊛",
                        circledcirc: "⊚",
                        circleddash: "⊝",
                        CircleDot: "⊙",
                        circledR: "®",
                        circledS: "Ⓢ",
                        CircleMinus: "⊖",
                        CirclePlus: "⊕",
                        CircleTimes: "⊗",
                        cir: "○",
                        cirE: "⧃",
                        cire: "≗",
                        cirfnint: "⨐",
                        cirmid: "⫯",
                        cirscir: "⧂",
                        ClockwiseContourIntegral: "∲",
                        CloseCurlyDoubleQuote: "”",
                        CloseCurlyQuote: "’",
                        clubs: "♣",
                        clubsuit: "♣",
                        colon: ":",
                        Colon: "∷",
                        Colone: "⩴",
                        colone: "≔",
                        coloneq: "≔",
                        comma: ",",
                        commat: "@",
                        comp: "∁",
                        compfn: "∘",
                        complement: "∁",
                        complexes: "ℂ",
                        cong: "≅",
                        congdot: "⩭",
                        Congruent: "≡",
                        conint: "∮",
                        Conint: "∯",
                        ContourIntegral: "∮",
                        copf: "𝕔",
                        Copf: "ℂ",
                        coprod: "∐",
                        Coproduct: "∐",
                        copy: "©",
                        COPY: "©",
                        copysr: "℗",
                        CounterClockwiseContourIntegral: "∳",
                        crarr: "↵",
                        cross: "✗",
                        Cross: "⨯",
                        Cscr: "𝒞",
                        cscr: "𝒸",
                        csub: "⫏",
                        csube: "⫑",
                        csup: "⫐",
                        csupe: "⫒",
                        ctdot: "⋯",
                        cudarrl: "⤸",
                        cudarrr: "⤵",
                        cuepr: "⋞",
                        cuesc: "⋟",
                        cularr: "↶",
                        cularrp: "⤽",
                        cupbrcap: "⩈",
                        cupcap: "⩆",
                        CupCap: "≍",
                        cup: "∪",
                        Cup: "⋓",
                        cupcup: "⩊",
                        cupdot: "⊍",
                        cupor: "⩅",
                        cups: "∪︀",
                        curarr: "↷",
                        curarrm: "⤼",
                        curlyeqprec: "⋞",
                        curlyeqsucc: "⋟",
                        curlyvee: "⋎",
                        curlywedge: "⋏",
                        curren: "¤",
                        curvearrowleft: "↶",
                        curvearrowright: "↷",
                        cuvee: "⋎",
                        cuwed: "⋏",
                        cwconint: "∲",
                        cwint: "∱",
                        cylcty: "⌭",
                        dagger: "†",
                        Dagger: "‡",
                        daleth: "ℸ",
                        darr: "↓",
                        Darr: "↡",
                        dArr: "⇓",
                        dash: "‐",
                        Dashv: "⫤",
                        dashv: "⊣",
                        dbkarow: "⤏",
                        dblac: "˝",
                        Dcaron: "Ď",
                        dcaron: "ď",
                        Dcy: "Д",
                        dcy: "д",
                        ddagger: "‡",
                        ddarr: "⇊",
                        DD: "ⅅ",
                        dd: "ⅆ",
                        DDotrahd: "⤑",
                        ddotseq: "⩷",
                        deg: "°",
                        Del: "∇",
                        Delta: "Δ",
                        delta: "δ",
                        demptyv: "⦱",
                        dfisht: "⥿",
                        Dfr: "𝔇",
                        dfr: "𝔡",
                        dHar: "⥥",
                        dharl: "⇃",
                        dharr: "⇂",
                        DiacriticalAcute: "´",
                        DiacriticalDot: "˙",
                        DiacriticalDoubleAcute: "˝",
                        DiacriticalGrave: "`",
                        DiacriticalTilde: "˜",
                        diam: "⋄",
                        diamond: "⋄",
                        Diamond: "⋄",
                        diamondsuit: "♦",
                        diams: "♦",
                        die: "¨",
                        DifferentialD: "ⅆ",
                        digamma: "ϝ",
                        disin: "⋲",
                        div: "÷",
                        divide: "÷",
                        divideontimes: "⋇",
                        divonx: "⋇",
                        DJcy: "Ђ",
                        djcy: "ђ",
                        dlcorn: "⌞",
                        dlcrop: "⌍",
                        dollar: "$",
                        Dopf: "𝔻",
                        dopf: "𝕕",
                        Dot: "¨",
                        dot: "˙",
                        DotDot: "⃜",
                        doteq: "≐",
                        doteqdot: "≑",
                        DotEqual: "≐",
                        dotminus: "∸",
                        dotplus: "∔",
                        dotsquare: "⊡",
                        doublebarwedge: "⌆",
                        DoubleContourIntegral: "∯",
                        DoubleDot: "¨",
                        DoubleDownArrow: "⇓",
                        DoubleLeftArrow: "⇐",
                        DoubleLeftRightArrow: "⇔",
                        DoubleLeftTee: "⫤",
                        DoubleLongLeftArrow: "⟸",
                        DoubleLongLeftRightArrow: "⟺",
                        DoubleLongRightArrow: "⟹",
                        DoubleRightArrow: "⇒",
                        DoubleRightTee: "⊨",
                        DoubleUpArrow: "⇑",
                        DoubleUpDownArrow: "⇕",
                        DoubleVerticalBar: "∥",
                        DownArrowBar: "⤓",
                        downarrow: "↓",
                        DownArrow: "↓",
                        Downarrow: "⇓",
                        DownArrowUpArrow: "⇵",
                        DownBreve: "̑",
                        downdownarrows: "⇊",
                        downharpoonleft: "⇃",
                        downharpoonright: "⇂",
                        DownLeftRightVector: "⥐",
                        DownLeftTeeVector: "⥞",
                        DownLeftVectorBar: "⥖",
                        DownLeftVector: "↽",
                        DownRightTeeVector: "⥟",
                        DownRightVectorBar: "⥗",
                        DownRightVector: "⇁",
                        DownTeeArrow: "↧",
                        DownTee: "⊤",
                        drbkarow: "⤐",
                        drcorn: "⌟",
                        drcrop: "⌌",
                        Dscr: "𝒟",
                        dscr: "𝒹",
                        DScy: "Ѕ",
                        dscy: "ѕ",
                        dsol: "⧶",
                        Dstrok: "Đ",
                        dstrok: "đ",
                        dtdot: "⋱",
                        dtri: "▿",
                        dtrif: "▾",
                        duarr: "⇵",
                        duhar: "⥯",
                        dwangle: "⦦",
                        DZcy: "Џ",
                        dzcy: "џ",
                        dzigrarr: "⟿",
                        Eacute: "É",
                        eacute: "é",
                        easter: "⩮",
                        Ecaron: "Ě",
                        ecaron: "ě",
                        Ecirc: "Ê",
                        ecirc: "ê",
                        ecir: "≖",
                        ecolon: "≕",
                        Ecy: "Э",
                        ecy: "э",
                        eDDot: "⩷",
                        Edot: "Ė",
                        edot: "ė",
                        eDot: "≑",
                        ee: "ⅇ",
                        efDot: "≒",
                        Efr: "𝔈",
                        efr: "𝔢",
                        eg: "⪚",
                        Egrave: "È",
                        egrave: "è",
                        egs: "⪖",
                        egsdot: "⪘",
                        el: "⪙",
                        Element: "∈",
                        elinters: "⏧",
                        ell: "ℓ",
                        els: "⪕",
                        elsdot: "⪗",
                        Emacr: "Ē",
                        emacr: "ē",
                        empty: "∅",
                        emptyset: "∅",
                        EmptySmallSquare: "◻",
                        emptyv: "∅",
                        EmptyVerySmallSquare: "▫",
                        emsp13: " ",
                        emsp14: " ",
                        emsp: " ",
                        ENG: "Ŋ",
                        eng: "ŋ",
                        ensp: " ",
                        Eogon: "Ę",
                        eogon: "ę",
                        Eopf: "𝔼",
                        eopf: "𝕖",
                        epar: "⋕",
                        eparsl: "⧣",
                        eplus: "⩱",
                        epsi: "ε",
                        Epsilon: "Ε",
                        epsilon: "ε",
                        epsiv: "ϵ",
                        eqcirc: "≖",
                        eqcolon: "≕",
                        eqsim: "≂",
                        eqslantgtr: "⪖",
                        eqslantless: "⪕",
                        Equal: "⩵",
                        equals: "=",
                        EqualTilde: "≂",
                        equest: "≟",
                        Equilibrium: "⇌",
                        equiv: "≡",
                        equivDD: "⩸",
                        eqvparsl: "⧥",
                        erarr: "⥱",
                        erDot: "≓",
                        escr: "ℯ",
                        Escr: "ℰ",
                        esdot: "≐",
                        Esim: "⩳",
                        esim: "≂",
                        Eta: "Η",
                        eta: "η",
                        ETH: "Ð",
                        eth: "ð",
                        Euml: "Ë",
                        euml: "ë",
                        euro: "€",
                        excl: "!",
                        exist: "∃",
                        Exists: "∃",
                        expectation: "ℰ",
                        exponentiale: "ⅇ",
                        ExponentialE: "ⅇ",
                        fallingdotseq: "≒",
                        Fcy: "Ф",
                        fcy: "ф",
                        female: "♀",
                        ffilig: "ﬃ",
                        fflig: "ﬀ",
                        ffllig: "ﬄ",
                        Ffr: "𝔉",
                        ffr: "𝔣",
                        filig: "ﬁ",
                        FilledSmallSquare: "◼",
                        FilledVerySmallSquare: "▪",
                        fjlig: "fj",
                        flat: "♭",
                        fllig: "ﬂ",
                        fltns: "▱",
                        fnof: "ƒ",
                        Fopf: "𝔽",
                        fopf: "𝕗",
                        forall: "∀",
                        ForAll: "∀",
                        fork: "⋔",
                        forkv: "⫙",
                        Fouriertrf: "ℱ",
                        fpartint: "⨍",
                        frac12: "½",
                        frac13: "⅓",
                        frac14: "¼",
                        frac15: "⅕",
                        frac16: "⅙",
                        frac18: "⅛",
                        frac23: "⅔",
                        frac25: "⅖",
                        frac34: "¾",
                        frac35: "⅗",
                        frac38: "⅜",
                        frac45: "⅘",
                        frac56: "⅚",
                        frac58: "⅝",
                        frac78: "⅞",
                        frasl: "⁄",
                        frown: "⌢",
                        fscr: "𝒻",
                        Fscr: "ℱ",
                        gacute: "ǵ",
                        Gamma: "Γ",
                        gamma: "γ",
                        Gammad: "Ϝ",
                        gammad: "ϝ",
                        gap: "⪆",
                        Gbreve: "Ğ",
                        gbreve: "ğ",
                        Gcedil: "Ģ",
                        Gcirc: "Ĝ",
                        gcirc: "ĝ",
                        Gcy: "Г",
                        gcy: "г",
                        Gdot: "Ġ",
                        gdot: "ġ",
                        ge: "≥",
                        gE: "≧",
                        gEl: "⪌",
                        gel: "⋛",
                        geq: "≥",
                        geqq: "≧",
                        geqslant: "⩾",
                        gescc: "⪩",
                        ges: "⩾",
                        gesdot: "⪀",
                        gesdoto: "⪂",
                        gesdotol: "⪄",
                        gesl: "⋛︀",
                        gesles: "⪔",
                        Gfr: "𝔊",
                        gfr: "𝔤",
                        gg: "≫",
                        Gg: "⋙",
                        ggg: "⋙",
                        gimel: "ℷ",
                        GJcy: "Ѓ",
                        gjcy: "ѓ",
                        gla: "⪥",
                        gl: "≷",
                        glE: "⪒",
                        glj: "⪤",
                        gnap: "⪊",
                        gnapprox: "⪊",
                        gne: "⪈",
                        gnE: "≩",
                        gneq: "⪈",
                        gneqq: "≩",
                        gnsim: "⋧",
                        Gopf: "𝔾",
                        gopf: "𝕘",
                        grave: "`",
                        GreaterEqual: "≥",
                        GreaterEqualLess: "⋛",
                        GreaterFullEqual: "≧",
                        GreaterGreater: "⪢",
                        GreaterLess: "≷",
                        GreaterSlantEqual: "⩾",
                        GreaterTilde: "≳",
                        Gscr: "𝒢",
                        gscr: "ℊ",
                        gsim: "≳",
                        gsime: "⪎",
                        gsiml: "⪐",
                        gtcc: "⪧",
                        gtcir: "⩺",
                        gt: ">",
                        GT: ">",
                        Gt: "≫",
                        gtdot: "⋗",
                        gtlPar: "⦕",
                        gtquest: "⩼",
                        gtrapprox: "⪆",
                        gtrarr: "⥸",
                        gtrdot: "⋗",
                        gtreqless: "⋛",
                        gtreqqless: "⪌",
                        gtrless: "≷",
                        gtrsim: "≳",
                        gvertneqq: "≩︀",
                        gvnE: "≩︀",
                        Hacek: "ˇ",
                        hairsp: " ",
                        half: "½",
                        hamilt: "ℋ",
                        HARDcy: "Ъ",
                        hardcy: "ъ",
                        harrcir: "⥈",
                        harr: "↔",
                        hArr: "⇔",
                        harrw: "↭",
                        Hat: "^",
                        hbar: "ℏ",
                        Hcirc: "Ĥ",
                        hcirc: "ĥ",
                        hearts: "♥",
                        heartsuit: "♥",
                        hellip: "…",
                        hercon: "⊹",
                        hfr: "𝔥",
                        Hfr: "ℌ",
                        HilbertSpace: "ℋ",
                        hksearow: "⤥",
                        hkswarow: "⤦",
                        hoarr: "⇿",
                        homtht: "∻",
                        hookleftarrow: "↩",
                        hookrightarrow: "↪",
                        hopf: "𝕙",
                        Hopf: "ℍ",
                        horbar: "―",
                        HorizontalLine: "─",
                        hscr: "𝒽",
                        Hscr: "ℋ",
                        hslash: "ℏ",
                        Hstrok: "Ħ",
                        hstrok: "ħ",
                        HumpDownHump: "≎",
                        HumpEqual: "≏",
                        hybull: "⁃",
                        hyphen: "‐",
                        Iacute: "Í",
                        iacute: "í",
                        ic: "⁣",
                        Icirc: "Î",
                        icirc: "î",
                        Icy: "И",
                        icy: "и",
                        Idot: "İ",
                        IEcy: "Е",
                        iecy: "е",
                        iexcl: "¡",
                        iff: "⇔",
                        ifr: "𝔦",
                        Ifr: "ℑ",
                        Igrave: "Ì",
                        igrave: "ì",
                        ii: "ⅈ",
                        iiiint: "⨌",
                        iiint: "∭",
                        iinfin: "⧜",
                        iiota: "℩",
                        IJlig: "Ĳ",
                        ijlig: "ĳ",
                        Imacr: "Ī",
                        imacr: "ī",
                        image: "ℑ",
                        ImaginaryI: "ⅈ",
                        imagline: "ℐ",
                        imagpart: "ℑ",
                        imath: "ı",
                        Im: "ℑ",
                        imof: "⊷",
                        imped: "Ƶ",
                        Implies: "⇒",
                        incare: "℅",
                        "in": "∈",
                        infin: "∞",
                        infintie: "⧝",
                        inodot: "ı",
                        intcal: "⊺",
                        "int": "∫",
                        Int: "∬",
                        integers: "ℤ",
                        Integral: "∫",
                        intercal: "⊺",
                        Intersection: "⋂",
                        intlarhk: "⨗",
                        intprod: "⨼",
                        InvisibleComma: "⁣",
                        InvisibleTimes: "⁢",
                        IOcy: "Ё",
                        iocy: "ё",
                        Iogon: "Į",
                        iogon: "į",
                        Iopf: "𝕀",
                        iopf: "𝕚",
                        Iota: "Ι",
                        iota: "ι",
                        iprod: "⨼",
                        iquest: "¿",
                        iscr: "𝒾",
                        Iscr: "ℐ",
                        isin: "∈",
                        isindot: "⋵",
                        isinE: "⋹",
                        isins: "⋴",
                        isinsv: "⋳",
                        isinv: "∈",
                        it: "⁢",
                        Itilde: "Ĩ",
                        itilde: "ĩ",
                        Iukcy: "І",
                        iukcy: "і",
                        Iuml: "Ï",
                        iuml: "ï",
                        Jcirc: "Ĵ",
                        jcirc: "ĵ",
                        Jcy: "Й",
                        jcy: "й",
                        Jfr: "𝔍",
                        jfr: "𝔧",
                        jmath: "ȷ",
                        Jopf: "𝕁",
                        jopf: "𝕛",
                        Jscr: "𝒥",
                        jscr: "𝒿",
                        Jsercy: "Ј",
                        jsercy: "ј",
                        Jukcy: "Є",
                        jukcy: "є",
                        Kappa: "Κ",
                        kappa: "κ",
                        kappav: "ϰ",
                        Kcedil: "Ķ",
                        kcedil: "ķ",
                        Kcy: "К",
                        kcy: "к",
                        Kfr: "𝔎",
                        kfr: "𝔨",
                        kgreen: "ĸ",
                        KHcy: "Х",
                        khcy: "х",
                        KJcy: "Ќ",
                        kjcy: "ќ",
                        Kopf: "𝕂",
                        kopf: "𝕜",
                        Kscr: "𝒦",
                        kscr: "𝓀",
                        lAarr: "⇚",
                        Lacute: "Ĺ",
                        lacute: "ĺ",
                        laemptyv: "⦴",
                        lagran: "ℒ",
                        Lambda: "Λ",
                        lambda: "λ",
                        lang: "⟨",
                        Lang: "⟪",
                        langd: "⦑",
                        langle: "⟨",
                        lap: "⪅",
                        Laplacetrf: "ℒ",
                        laquo: "«",
                        larrb: "⇤",
                        larrbfs: "⤟",
                        larr: "←",
                        Larr: "↞",
                        lArr: "⇐",
                        larrfs: "⤝",
                        larrhk: "↩",
                        larrlp: "↫",
                        larrpl: "⤹",
                        larrsim: "⥳",
                        larrtl: "↢",
                        latail: "⤙",
                        lAtail: "⤛",
                        lat: "⪫",
                        late: "⪭",
                        lates: "⪭︀",
                        lbarr: "⤌",
                        lBarr: "⤎",
                        lbbrk: "❲",
                        lbrace: "{",
                        lbrack: "[",
                        lbrke: "⦋",
                        lbrksld: "⦏",
                        lbrkslu: "⦍",
                        Lcaron: "Ľ",
                        lcaron: "ľ",
                        Lcedil: "Ļ",
                        lcedil: "ļ",
                        lceil: "⌈",
                        lcub: "{",
                        Lcy: "Л",
                        lcy: "л",
                        ldca: "⤶",
                        ldquo: "“",
                        ldquor: "„",
                        ldrdhar: "⥧",
                        ldrushar: "⥋",
                        ldsh: "↲",
                        le: "≤",
                        lE: "≦",
                        LeftAngleBracket: "⟨",
                        LeftArrowBar: "⇤",
                        leftarrow: "←",
                        LeftArrow: "←",
                        Leftarrow: "⇐",
                        LeftArrowRightArrow: "⇆",
                        leftarrowtail: "↢",
                        LeftCeiling: "⌈",
                        LeftDoubleBracket: "⟦",
                        LeftDownTeeVector: "⥡",
                        LeftDownVectorBar: "⥙",
                        LeftDownVector: "⇃",
                        LeftFloor: "⌊",
                        leftharpoondown: "↽",
                        leftharpoonup: "↼",
                        leftleftarrows: "⇇",
                        leftrightarrow: "↔",
                        LeftRightArrow: "↔",
                        Leftrightarrow: "⇔",
                        leftrightarrows: "⇆",
                        leftrightharpoons: "⇋",
                        leftrightsquigarrow: "↭",
                        LeftRightVector: "⥎",
                        LeftTeeArrow: "↤",
                        LeftTee: "⊣",
                        LeftTeeVector: "⥚",
                        leftthreetimes: "⋋",
                        LeftTriangleBar: "⧏",
                        LeftTriangle: "⊲",
                        LeftTriangleEqual: "⊴",
                        LeftUpDownVector: "⥑",
                        LeftUpTeeVector: "⥠",
                        LeftUpVectorBar: "⥘",
                        LeftUpVector: "↿",
                        LeftVectorBar: "⥒",
                        LeftVector: "↼",
                        lEg: "⪋",
                        leg: "⋚",
                        leq: "≤",
                        leqq: "≦",
                        leqslant: "⩽",
                        lescc: "⪨",
                        les: "⩽",
                        lesdot: "⩿",
                        lesdoto: "⪁",
                        lesdotor: "⪃",
                        lesg: "⋚︀",
                        lesges: "⪓",
                        lessapprox: "⪅",
                        lessdot: "⋖",
                        lesseqgtr: "⋚",
                        lesseqqgtr: "⪋",
                        LessEqualGreater: "⋚",
                        LessFullEqual: "≦",
                        LessGreater: "≶",
                        lessgtr: "≶",
                        LessLess: "⪡",
                        lesssim: "≲",
                        LessSlantEqual: "⩽",
                        LessTilde: "≲",
                        lfisht: "⥼",
                        lfloor: "⌊",
                        Lfr: "𝔏",
                        lfr: "𝔩",
                        lg: "≶",
                        lgE: "⪑",
                        lHar: "⥢",
                        lhard: "↽",
                        lharu: "↼",
                        lharul: "⥪",
                        lhblk: "▄",
                        LJcy: "Љ",
                        ljcy: "љ",
                        llarr: "⇇",
                        ll: "≪",
                        Ll: "⋘",
                        llcorner: "⌞",
                        Lleftarrow: "⇚",
                        llhard: "⥫",
                        lltri: "◺",
                        Lmidot: "Ŀ",
                        lmidot: "ŀ",
                        lmoustache: "⎰",
                        lmoust: "⎰",
                        lnap: "⪉",
                        lnapprox: "⪉",
                        lne: "⪇",
                        lnE: "≨",
                        lneq: "⪇",
                        lneqq: "≨",
                        lnsim: "⋦",
                        loang: "⟬",
                        loarr: "⇽",
                        lobrk: "⟦",
                        longleftarrow: "⟵",
                        LongLeftArrow: "⟵",
                        Longleftarrow: "⟸",
                        longleftrightarrow: "⟷",
                        LongLeftRightArrow: "⟷",
                        Longleftrightarrow: "⟺",
                        longmapsto: "⟼",
                        longrightarrow: "⟶",
                        LongRightArrow: "⟶",
                        Longrightarrow: "⟹",
                        looparrowleft: "↫",
                        looparrowright: "↬",
                        lopar: "⦅",
                        Lopf: "𝕃",
                        lopf: "𝕝",
                        loplus: "⨭",
                        lotimes: "⨴",
                        lowast: "∗",
                        lowbar: "_",
                        LowerLeftArrow: "↙",
                        LowerRightArrow: "↘",
                        loz: "◊",
                        lozenge: "◊",
                        lozf: "⧫",
                        lpar: "(",
                        lparlt: "⦓",
                        lrarr: "⇆",
                        lrcorner: "⌟",
                        lrhar: "⇋",
                        lrhard: "⥭",
                        lrm: "‎",
                        lrtri: "⊿",
                        lsaquo: "‹",
                        lscr: "𝓁",
                        Lscr: "ℒ",
                        lsh: "↰",
                        Lsh: "↰",
                        lsim: "≲",
                        lsime: "⪍",
                        lsimg: "⪏",
                        lsqb: "[",
                        lsquo: "‘",
                        lsquor: "‚",
                        Lstrok: "Ł",
                        lstrok: "ł",
                        ltcc: "⪦",
                        ltcir: "⩹",
                        lt: "<",
                        LT: "<",
                        Lt: "≪",
                        ltdot: "⋖",
                        lthree: "⋋",
                        ltimes: "⋉",
                        ltlarr: "⥶",
                        ltquest: "⩻",
                        ltri: "◃",
                        ltrie: "⊴",
                        ltrif: "◂",
                        ltrPar: "⦖",
                        lurdshar: "⥊",
                        luruhar: "⥦",
                        lvertneqq: "≨︀",
                        lvnE: "≨︀",
                        macr: "¯",
                        male: "♂",
                        malt: "✠",
                        maltese: "✠",
                        Map: "⤅",
                        map: "↦",
                        mapsto: "↦",
                        mapstodown: "↧",
                        mapstoleft: "↤",
                        mapstoup: "↥",
                        marker: "▮",
                        mcomma: "⨩",
                        Mcy: "М",
                        mcy: "м",
                        mdash: "—",
                        mDDot: "∺",
                        measuredangle: "∡",
                        MediumSpace: " ",
                        Mellintrf: "ℳ",
                        Mfr: "𝔐",
                        mfr: "𝔪",
                        mho: "℧",
                        micro: "µ",
                        midast: "*",
                        midcir: "⫰",
                        mid: "∣",
                        middot: "·",
                        minusb: "⊟",
                        minus: "−",
                        minusd: "∸",
                        minusdu: "⨪",
                        MinusPlus: "∓",
                        mlcp: "⫛",
                        mldr: "…",
                        mnplus: "∓",
                        models: "⊧",
                        Mopf: "𝕄",
                        mopf: "𝕞",
                        mp: "∓",
                        mscr: "𝓂",
                        Mscr: "ℳ",
                        mstpos: "∾",
                        Mu: "Μ",
                        mu: "μ",
                        multimap: "⊸",
                        mumap: "⊸",
                        nabla: "∇",
                        Nacute: "Ń",
                        nacute: "ń",
                        nang: "∠⃒",
                        nap: "≉",
                        napE: "⩰̸",
                        napid: "≋̸",
                        napos: "ŉ",
                        napprox: "≉",
                        natural: "♮",
                        naturals: "ℕ",
                        natur: "♮",
                        nbsp: " ",
                        nbump: "≎̸",
                        nbumpe: "≏̸",
                        ncap: "⩃",
                        Ncaron: "Ň",
                        ncaron: "ň",
                        Ncedil: "Ņ",
                        ncedil: "ņ",
                        ncong: "≇",
                        ncongdot: "⩭̸",
                        ncup: "⩂",
                        Ncy: "Н",
                        ncy: "н",
                        ndash: "–",
                        nearhk: "⤤",
                        nearr: "↗",
                        neArr: "⇗",
                        nearrow: "↗",
                        ne: "≠",
                        nedot: "≐̸",
                        NegativeMediumSpace: "​",
                        NegativeThickSpace: "​",
                        NegativeThinSpace: "​",
                        NegativeVeryThinSpace: "​",
                        nequiv: "≢",
                        nesear: "⤨",
                        nesim: "≂̸",
                        NestedGreaterGreater: "≫",
                        NestedLessLess: "≪",
                        NewLine: "\n",
                        nexist: "∄",
                        nexists: "∄",
                        Nfr: "𝔑",
                        nfr: "𝔫",
                        ngE: "≧̸",
                        nge: "≱",
                        ngeq: "≱",
                        ngeqq: "≧̸",
                        ngeqslant: "⩾̸",
                        nges: "⩾̸",
                        nGg: "⋙̸",
                        ngsim: "≵",
                        nGt: "≫⃒",
                        ngt: "≯",
                        ngtr: "≯",
                        nGtv: "≫̸",
                        nharr: "↮",
                        nhArr: "⇎",
                        nhpar: "⫲",
                        ni: "∋",
                        nis: "⋼",
                        nisd: "⋺",
                        niv: "∋",
                        NJcy: "Њ",
                        njcy: "њ",
                        nlarr: "↚",
                        nlArr: "⇍",
                        nldr: "‥",
                        nlE: "≦̸",
                        nle: "≰",
                        nleftarrow: "↚",
                        nLeftarrow: "⇍",
                        nleftrightarrow: "↮",
                        nLeftrightarrow: "⇎",
                        nleq: "≰",
                        nleqq: "≦̸",
                        nleqslant: "⩽̸",
                        nles: "⩽̸",
                        nless: "≮",
                        nLl: "⋘̸",
                        nlsim: "≴",
                        nLt: "≪⃒",
                        nlt: "≮",
                        nltri: "⋪",
                        nltrie: "⋬",
                        nLtv: "≪̸",
                        nmid: "∤",
                        NoBreak: "⁠",
                        NonBreakingSpace: " ",
                        nopf: "𝕟",
                        Nopf: "ℕ",
                        Not: "⫬",
                        not: "¬",
                        NotCongruent: "≢",
                        NotCupCap: "≭",
                        NotDoubleVerticalBar: "∦",
                        NotElement: "∉",
                        NotEqual: "≠",
                        NotEqualTilde: "≂̸",
                        NotExists: "∄",
                        NotGreater: "≯",
                        NotGreaterEqual: "≱",
                        NotGreaterFullEqual: "≧̸",
                        NotGreaterGreater: "≫̸",
                        NotGreaterLess: "≹",
                        NotGreaterSlantEqual: "⩾̸",
                        NotGreaterTilde: "≵",
                        NotHumpDownHump: "≎̸",
                        NotHumpEqual: "≏̸",
                        notin: "∉",
                        notindot: "⋵̸",
                        notinE: "⋹̸",
                        notinva: "∉",
                        notinvb: "⋷",
                        notinvc: "⋶",
                        NotLeftTriangleBar: "⧏̸",
                        NotLeftTriangle: "⋪",
                        NotLeftTriangleEqual: "⋬",
                        NotLess: "≮",
                        NotLessEqual: "≰",
                        NotLessGreater: "≸",
                        NotLessLess: "≪̸",
                        NotLessSlantEqual: "⩽̸",
                        NotLessTilde: "≴",
                        NotNestedGreaterGreater: "⪢̸",
                        NotNestedLessLess: "⪡̸",
                        notni: "∌",
                        notniva: "∌",
                        notnivb: "⋾",
                        notnivc: "⋽",
                        NotPrecedes: "⊀",
                        NotPrecedesEqual: "⪯̸",
                        NotPrecedesSlantEqual: "⋠",
                        NotReverseElement: "∌",
                        NotRightTriangleBar: "⧐̸",
                        NotRightTriangle: "⋫",
                        NotRightTriangleEqual: "⋭",
                        NotSquareSubset: "⊏̸",
                        NotSquareSubsetEqual: "⋢",
                        NotSquareSuperset: "⊐̸",
                        NotSquareSupersetEqual: "⋣",
                        NotSubset: "⊂⃒",
                        NotSubsetEqual: "⊈",
                        NotSucceeds: "⊁",
                        NotSucceedsEqual: "⪰̸",
                        NotSucceedsSlantEqual: "⋡",
                        NotSucceedsTilde: "≿̸",
                        NotSuperset: "⊃⃒",
                        NotSupersetEqual: "⊉",
                        NotTilde: "≁",
                        NotTildeEqual: "≄",
                        NotTildeFullEqual: "≇",
                        NotTildeTilde: "≉",
                        NotVerticalBar: "∤",
                        nparallel: "∦",
                        npar: "∦",
                        nparsl: "⫽⃥",
                        npart: "∂̸",
                        npolint: "⨔",
                        npr: "⊀",
                        nprcue: "⋠",
                        nprec: "⊀",
                        npreceq: "⪯̸",
                        npre: "⪯̸",
                        nrarrc: "⤳̸",
                        nrarr: "↛",
                        nrArr: "⇏",
                        nrarrw: "↝̸",
                        nrightarrow: "↛",
                        nRightarrow: "⇏",
                        nrtri: "⋫",
                        nrtrie: "⋭",
                        nsc: "⊁",
                        nsccue: "⋡",
                        nsce: "⪰̸",
                        Nscr: "𝒩",
                        nscr: "𝓃",
                        nshortmid: "∤",
                        nshortparallel: "∦",
                        nsim: "≁",
                        nsime: "≄",
                        nsimeq: "≄",
                        nsmid: "∤",
                        nspar: "∦",
                        nsqsube: "⋢",
                        nsqsupe: "⋣",
                        nsub: "⊄",
                        nsubE: "⫅̸",
                        nsube: "⊈",
                        nsubset: "⊂⃒",
                        nsubseteq: "⊈",
                        nsubseteqq: "⫅̸",
                        nsucc: "⊁",
                        nsucceq: "⪰̸",
                        nsup: "⊅",
                        nsupE: "⫆̸",
                        nsupe: "⊉",
                        nsupset: "⊃⃒",
                        nsupseteq: "⊉",
                        nsupseteqq: "⫆̸",
                        ntgl: "≹",
                        Ntilde: "Ñ",
                        ntilde: "ñ",
                        ntlg: "≸",
                        ntriangleleft: "⋪",
                        ntrianglelefteq: "⋬",
                        ntriangleright: "⋫",
                        ntrianglerighteq: "⋭",
                        Nu: "Ν",
                        nu: "ν",
                        num: "#",
                        numero: "№",
                        numsp: " ",
                        nvap: "≍⃒",
                        nvdash: "⊬",
                        nvDash: "⊭",
                        nVdash: "⊮",
                        nVDash: "⊯",
                        nvge: "≥⃒",
                        nvgt: ">⃒",
                        nvHarr: "⤄",
                        nvinfin: "⧞",
                        nvlArr: "⤂",
                        nvle: "≤⃒",
                        nvlt: "<⃒",
                        nvltrie: "⊴⃒",
                        nvrArr: "⤃",
                        nvrtrie: "⊵⃒",
                        nvsim: "∼⃒",
                        nwarhk: "⤣",
                        nwarr: "↖",
                        nwArr: "⇖",
                        nwarrow: "↖",
                        nwnear: "⤧",
                        Oacute: "Ó",
                        oacute: "ó",
                        oast: "⊛",
                        Ocirc: "Ô",
                        ocirc: "ô",
                        ocir: "⊚",
                        Ocy: "О",
                        ocy: "о",
                        odash: "⊝",
                        Odblac: "Ő",
                        odblac: "ő",
                        odiv: "⨸",
                        odot: "⊙",
                        odsold: "⦼",
                        OElig: "Œ",
                        oelig: "œ",
                        ofcir: "⦿",
                        Ofr: "𝔒",
                        ofr: "𝔬",
                        ogon: "˛",
                        Ograve: "Ò",
                        ograve: "ò",
                        ogt: "⧁",
                        ohbar: "⦵",
                        ohm: "Ω",
                        oint: "∮",
                        olarr: "↺",
                        olcir: "⦾",
                        olcross: "⦻",
                        oline: "‾",
                        olt: "⧀",
                        Omacr: "Ō",
                        omacr: "ō",
                        Omega: "Ω",
                        omega: "ω",
                        Omicron: "Ο",
                        omicron: "ο",
                        omid: "⦶",
                        ominus: "⊖",
                        Oopf: "𝕆",
                        oopf: "𝕠",
                        opar: "⦷",
                        OpenCurlyDoubleQuote: "“",
                        OpenCurlyQuote: "‘",
                        operp: "⦹",
                        oplus: "⊕",
                        orarr: "↻",
                        Or: "⩔",
                        or: "∨",
                        ord: "⩝",
                        order: "ℴ",
                        orderof: "ℴ",
                        ordf: "ª",
                        ordm: "º",
                        origof: "⊶",
                        oror: "⩖",
                        orslope: "⩗",
                        orv: "⩛",
                        oS: "Ⓢ",
                        Oscr: "𝒪",
                        oscr: "ℴ",
                        Oslash: "Ø",
                        oslash: "ø",
                        osol: "⊘",
                        Otilde: "Õ",
                        otilde: "õ",
                        otimesas: "⨶",
                        Otimes: "⨷",
                        otimes: "⊗",
                        Ouml: "Ö",
                        ouml: "ö",
                        ovbar: "⌽",
                        OverBar: "‾",
                        OverBrace: "⏞",
                        OverBracket: "⎴",
                        OverParenthesis: "⏜",
                        para: "¶",
                        parallel: "∥",
                        par: "∥",
                        parsim: "⫳",
                        parsl: "⫽",
                        part: "∂",
                        PartialD: "∂",
                        Pcy: "П",
                        pcy: "п",
                        percnt: "%",
                        period: ".",
                        permil: "‰",
                        perp: "⊥",
                        pertenk: "‱",
                        Pfr: "𝔓",
                        pfr: "𝔭",
                        Phi: "Φ",
                        phi: "φ",
                        phiv: "ϕ",
                        phmmat: "ℳ",
                        phone: "☎",
                        Pi: "Π",
                        pi: "π",
                        pitchfork: "⋔",
                        piv: "ϖ",
                        planck: "ℏ",
                        planckh: "ℎ",
                        plankv: "ℏ",
                        plusacir: "⨣",
                        plusb: "⊞",
                        pluscir: "⨢",
                        plus: "+",
                        plusdo: "∔",
                        plusdu: "⨥",
                        pluse: "⩲",
                        PlusMinus: "±",
                        plusmn: "±",
                        plussim: "⨦",
                        plustwo: "⨧",
                        pm: "±",
                        Poincareplane: "ℌ",
                        pointint: "⨕",
                        popf: "𝕡",
                        Popf: "ℙ",
                        pound: "£",
                        prap: "⪷",
                        Pr: "⪻",
                        pr: "≺",
                        prcue: "≼",
                        precapprox: "⪷",
                        prec: "≺",
                        preccurlyeq: "≼",
                        Precedes: "≺",
                        PrecedesEqual: "⪯",
                        PrecedesSlantEqual: "≼",
                        PrecedesTilde: "≾",
                        preceq: "⪯",
                        precnapprox: "⪹",
                        precneqq: "⪵",
                        precnsim: "⋨",
                        pre: "⪯",
                        prE: "⪳",
                        precsim: "≾",
                        prime: "′",
                        Prime: "″",
                        primes: "ℙ",
                        prnap: "⪹",
                        prnE: "⪵",
                        prnsim: "⋨",
                        prod: "∏",
                        Product: "∏",
                        profalar: "⌮",
                        profline: "⌒",
                        profsurf: "⌓",
                        prop: "∝",
                        Proportional: "∝",
                        Proportion: "∷",
                        propto: "∝",
                        prsim: "≾",
                        prurel: "⊰",
                        Pscr: "𝒫",
                        pscr: "𝓅",
                        Psi: "Ψ",
                        psi: "ψ",
                        puncsp: " ",
                        Qfr: "𝔔",
                        qfr: "𝔮",
                        qint: "⨌",
                        qopf: "𝕢",
                        Qopf: "ℚ",
                        qprime: "⁗",
                        Qscr: "𝒬",
                        qscr: "𝓆",
                        quaternions: "ℍ",
                        quatint: "⨖",
                        quest: "?",
                        questeq: "≟",
                        quot: '"',
                        QUOT: '"',
                        rAarr: "⇛",
                        race: "∽̱",
                        Racute: "Ŕ",
                        racute: "ŕ",
                        radic: "√",
                        raemptyv: "⦳",
                        rang: "⟩",
                        Rang: "⟫",
                        rangd: "⦒",
                        range: "⦥",
                        rangle: "⟩",
                        raquo: "»",
                        rarrap: "⥵",
                        rarrb: "⇥",
                        rarrbfs: "⤠",
                        rarrc: "⤳",
                        rarr: "→",
                        Rarr: "↠",
                        rArr: "⇒",
                        rarrfs: "⤞",
                        rarrhk: "↪",
                        rarrlp: "↬",
                        rarrpl: "⥅",
                        rarrsim: "⥴",
                        Rarrtl: "⤖",
                        rarrtl: "↣",
                        rarrw: "↝",
                        ratail: "⤚",
                        rAtail: "⤜",
                        ratio: "∶",
                        rationals: "ℚ",
                        rbarr: "⤍",
                        rBarr: "⤏",
                        RBarr: "⤐",
                        rbbrk: "❳",
                        rbrace: "}",
                        rbrack: "]",
                        rbrke: "⦌",
                        rbrksld: "⦎",
                        rbrkslu: "⦐",
                        Rcaron: "Ř",
                        rcaron: "ř",
                        Rcedil: "Ŗ",
                        rcedil: "ŗ",
                        rceil: "⌉",
                        rcub: "}",
                        Rcy: "Р",
                        rcy: "р",
                        rdca: "⤷",
                        rdldhar: "⥩",
                        rdquo: "”",
                        rdquor: "”",
                        rdsh: "↳",
                        real: "ℜ",
                        realine: "ℛ",
                        realpart: "ℜ",
                        reals: "ℝ",
                        Re: "ℜ",
                        rect: "▭",
                        reg: "®",
                        REG: "®",
                        ReverseElement: "∋",
                        ReverseEquilibrium: "⇋",
                        ReverseUpEquilibrium: "⥯",
                        rfisht: "⥽",
                        rfloor: "⌋",
                        rfr: "𝔯",
                        Rfr: "ℜ",
                        rHar: "⥤",
                        rhard: "⇁",
                        rharu: "⇀",
                        rharul: "⥬",
                        Rho: "Ρ",
                        rho: "ρ",
                        rhov: "ϱ",
                        RightAngleBracket: "⟩",
                        RightArrowBar: "⇥",
                        rightarrow: "→",
                        RightArrow: "→",
                        Rightarrow: "⇒",
                        RightArrowLeftArrow: "⇄",
                        rightarrowtail: "↣",
                        RightCeiling: "⌉",
                        RightDoubleBracket: "⟧",
                        RightDownTeeVector: "⥝",
                        RightDownVectorBar: "⥕",
                        RightDownVector: "⇂",
                        RightFloor: "⌋",
                        rightharpoondown: "⇁",
                        rightharpoonup: "⇀",
                        rightleftarrows: "⇄",
                        rightleftharpoons: "⇌",
                        rightrightarrows: "⇉",
                        rightsquigarrow: "↝",
                        RightTeeArrow: "↦",
                        RightTee: "⊢",
                        RightTeeVector: "⥛",
                        rightthreetimes: "⋌",
                        RightTriangleBar: "⧐",
                        RightTriangle: "⊳",
                        RightTriangleEqual: "⊵",
                        RightUpDownVector: "⥏",
                        RightUpTeeVector: "⥜",
                        RightUpVectorBar: "⥔",
                        RightUpVector: "↾",
                        RightVectorBar: "⥓",
                        RightVector: "⇀",
                        ring: "˚",
                        risingdotseq: "≓",
                        rlarr: "⇄",
                        rlhar: "⇌",
                        rlm: "‏",
                        rmoustache: "⎱",
                        rmoust: "⎱",
                        rnmid: "⫮",
                        roang: "⟭",
                        roarr: "⇾",
                        robrk: "⟧",
                        ropar: "⦆",
                        ropf: "𝕣",
                        Ropf: "ℝ",
                        roplus: "⨮",
                        rotimes: "⨵",
                        RoundImplies: "⥰",
                        rpar: ")",
                        rpargt: "⦔",
                        rppolint: "⨒",
                        rrarr: "⇉",
                        Rrightarrow: "⇛",
                        rsaquo: "›",
                        rscr: "𝓇",
                        Rscr: "ℛ",
                        rsh: "↱",
                        Rsh: "↱",
                        rsqb: "]",
                        rsquo: "’",
                        rsquor: "’",
                        rthree: "⋌",
                        rtimes: "⋊",
                        rtri: "▹",
                        rtrie: "⊵",
                        rtrif: "▸",
                        rtriltri: "⧎",
                        RuleDelayed: "⧴",
                        ruluhar: "⥨",
                        rx: "℞",
                        Sacute: "Ś",
                        sacute: "ś",
                        sbquo: "‚",
                        scap: "⪸",
                        Scaron: "Š",
                        scaron: "š",
                        Sc: "⪼",
                        sc: "≻",
                        sccue: "≽",
                        sce: "⪰",
                        scE: "⪴",
                        Scedil: "Ş",
                        scedil: "ş",
                        Scirc: "Ŝ",
                        scirc: "ŝ",
                        scnap: "⪺",
                        scnE: "⪶",
                        scnsim: "⋩",
                        scpolint: "⨓",
                        scsim: "≿",
                        Scy: "С",
                        scy: "с",
                        sdotb: "⊡",
                        sdot: "⋅",
                        sdote: "⩦",
                        searhk: "⤥",
                        searr: "↘",
                        seArr: "⇘",
                        searrow: "↘",
                        sect: "§",
                        semi: ";",
                        seswar: "⤩",
                        setminus: "∖",
                        setmn: "∖",
                        sext: "✶",
                        Sfr: "𝔖",
                        sfr: "𝔰",
                        sfrown: "⌢",
                        sharp: "♯",
                        SHCHcy: "Щ",
                        shchcy: "щ",
                        SHcy: "Ш",
                        shcy: "ш",
                        ShortDownArrow: "↓",
                        ShortLeftArrow: "←",
                        shortmid: "∣",
                        shortparallel: "∥",
                        ShortRightArrow: "→",
                        ShortUpArrow: "↑",
                        shy: "­",
                        Sigma: "Σ",
                        sigma: "σ",
                        sigmaf: "ς",
                        sigmav: "ς",
                        sim: "∼",
                        simdot: "⩪",
                        sime: "≃",
                        simeq: "≃",
                        simg: "⪞",
                        simgE: "⪠",
                        siml: "⪝",
                        simlE: "⪟",
                        simne: "≆",
                        simplus: "⨤",
                        simrarr: "⥲",
                        slarr: "←",
                        SmallCircle: "∘",
                        smallsetminus: "∖",
                        smashp: "⨳",
                        smeparsl: "⧤",
                        smid: "∣",
                        smile: "⌣",
                        smt: "⪪",
                        smte: "⪬",
                        smtes: "⪬︀",
                        SOFTcy: "Ь",
                        softcy: "ь",
                        solbar: "⌿",
                        solb: "⧄",
                        sol: "/",
                        Sopf: "𝕊",
                        sopf: "𝕤",
                        spades: "♠",
                        spadesuit: "♠",
                        spar: "∥",
                        sqcap: "⊓",
                        sqcaps: "⊓︀",
                        sqcup: "⊔",
                        sqcups: "⊔︀",
                        Sqrt: "√",
                        sqsub: "⊏",
                        sqsube: "⊑",
                        sqsubset: "⊏",
                        sqsubseteq: "⊑",
                        sqsup: "⊐",
                        sqsupe: "⊒",
                        sqsupset: "⊐",
                        sqsupseteq: "⊒",
                        square: "□",
                        Square: "□",
                        SquareIntersection: "⊓",
                        SquareSubset: "⊏",
                        SquareSubsetEqual: "⊑",
                        SquareSuperset: "⊐",
                        SquareSupersetEqual: "⊒",
                        SquareUnion: "⊔",
                        squarf: "▪",
                        squ: "□",
                        squf: "▪",
                        srarr: "→",
                        Sscr: "𝒮",
                        sscr: "𝓈",
                        ssetmn: "∖",
                        ssmile: "⌣",
                        sstarf: "⋆",
                        Star: "⋆",
                        star: "☆",
                        starf: "★",
                        straightepsilon: "ϵ",
                        straightphi: "ϕ",
                        strns: "¯",
                        sub: "⊂",
                        Sub: "⋐",
                        subdot: "⪽",
                        subE: "⫅",
                        sube: "⊆",
                        subedot: "⫃",
                        submult: "⫁",
                        subnE: "⫋",
                        subne: "⊊",
                        subplus: "⪿",
                        subrarr: "⥹",
                        subset: "⊂",
                        Subset: "⋐",
                        subseteq: "⊆",
                        subseteqq: "⫅",
                        SubsetEqual: "⊆",
                        subsetneq: "⊊",
                        subsetneqq: "⫋",
                        subsim: "⫇",
                        subsub: "⫕",
                        subsup: "⫓",
                        succapprox: "⪸",
                        succ: "≻",
                        succcurlyeq: "≽",
                        Succeeds: "≻",
                        SucceedsEqual: "⪰",
                        SucceedsSlantEqual: "≽",
                        SucceedsTilde: "≿",
                        succeq: "⪰",
                        succnapprox: "⪺",
                        succneqq: "⪶",
                        succnsim: "⋩",
                        succsim: "≿",
                        SuchThat: "∋",
                        sum: "∑",
                        Sum: "∑",
                        sung: "♪",
                        sup1: "¹",
                        sup2: "²",
                        sup3: "³",
                        sup: "⊃",
                        Sup: "⋑",
                        supdot: "⪾",
                        supdsub: "⫘",
                        supE: "⫆",
                        supe: "⊇",
                        supedot: "⫄",
                        Superset: "⊃",
                        SupersetEqual: "⊇",
                        suphsol: "⟉",
                        suphsub: "⫗",
                        suplarr: "⥻",
                        supmult: "⫂",
                        supnE: "⫌",
                        supne: "⊋",
                        supplus: "⫀",
                        supset: "⊃",
                        Supset: "⋑",
                        supseteq: "⊇",
                        supseteqq: "⫆",
                        supsetneq: "⊋",
                        supsetneqq: "⫌",
                        supsim: "⫈",
                        supsub: "⫔",
                        supsup: "⫖",
                        swarhk: "⤦",
                        swarr: "↙",
                        swArr: "⇙",
                        swarrow: "↙",
                        swnwar: "⤪",
                        szlig: "ß",
                        Tab: "\t",
                        target: "⌖",
                        Tau: "Τ",
                        tau: "τ",
                        tbrk: "⎴",
                        Tcaron: "Ť",
                        tcaron: "ť",
                        Tcedil: "Ţ",
                        tcedil: "ţ",
                        Tcy: "Т",
                        tcy: "т",
                        tdot: "⃛",
                        telrec: "⌕",
                        Tfr: "𝔗",
                        tfr: "𝔱",
                        there4: "∴",
                        therefore: "∴",
                        Therefore: "∴",
                        Theta: "Θ",
                        theta: "θ",
                        thetasym: "ϑ",
                        thetav: "ϑ",
                        thickapprox: "≈",
                        thicksim: "∼",
                        ThickSpace: "  ",
                        ThinSpace: " ",
                        thinsp: " ",
                        thkap: "≈",
                        thksim: "∼",
                        THORN: "Þ",
                        thorn: "þ",
                        tilde: "˜",
                        Tilde: "∼",
                        TildeEqual: "≃",
                        TildeFullEqual: "≅",
                        TildeTilde: "≈",
                        timesbar: "⨱",
                        timesb: "⊠",
                        times: "×",
                        timesd: "⨰",
                        tint: "∭",
                        toea: "⤨",
                        topbot: "⌶",
                        topcir: "⫱",
                        top: "⊤",
                        Topf: "𝕋",
                        topf: "𝕥",
                        topfork: "⫚",
                        tosa: "⤩",
                        tprime: "‴",
                        trade: "™",
                        TRADE: "™",
                        triangle: "▵",
                        triangledown: "▿",
                        triangleleft: "◃",
                        trianglelefteq: "⊴",
                        triangleq: "≜",
                        triangleright: "▹",
                        trianglerighteq: "⊵",
                        tridot: "◬",
                        trie: "≜",
                        triminus: "⨺",
                        TripleDot: "⃛",
                        triplus: "⨹",
                        trisb: "⧍",
                        tritime: "⨻",
                        trpezium: "⏢",
                        Tscr: "𝒯",
                        tscr: "𝓉",
                        TScy: "Ц",
                        tscy: "ц",
                        TSHcy: "Ћ",
                        tshcy: "ћ",
                        Tstrok: "Ŧ",
                        tstrok: "ŧ",
                        twixt: "≬",
                        twoheadleftarrow: "↞",
                        twoheadrightarrow: "↠",
                        Uacute: "Ú",
                        uacute: "ú",
                        uarr: "↑",
                        Uarr: "↟",
                        uArr: "⇑",
                        Uarrocir: "⥉",
                        Ubrcy: "Ў",
                        ubrcy: "ў",
                        Ubreve: "Ŭ",
                        ubreve: "ŭ",
                        Ucirc: "Û",
                        ucirc: "û",
                        Ucy: "У",
                        ucy: "у",
                        udarr: "⇅",
                        Udblac: "Ű",
                        udblac: "ű",
                        udhar: "⥮",
                        ufisht: "⥾",
                        Ufr: "𝔘",
                        ufr: "𝔲",
                        Ugrave: "Ù",
                        ugrave: "ù",
                        uHar: "⥣",
                        uharl: "↿",
                        uharr: "↾",
                        uhblk: "▀",
                        ulcorn: "⌜",
                        ulcorner: "⌜",
                        ulcrop: "⌏",
                        ultri: "◸",
                        Umacr: "Ū",
                        umacr: "ū",
                        uml: "¨",
                        UnderBar: "_",
                        UnderBrace: "⏟",
                        UnderBracket: "⎵",
                        UnderParenthesis: "⏝",
                        Union: "⋃",
                        UnionPlus: "⊎",
                        Uogon: "Ų",
                        uogon: "ų",
                        Uopf: "𝕌",
                        uopf: "𝕦",
                        UpArrowBar: "⤒",
                        uparrow: "↑",
                        UpArrow: "↑",
                        Uparrow: "⇑",
                        UpArrowDownArrow: "⇅",
                        updownarrow: "↕",
                        UpDownArrow: "↕",
                        Updownarrow: "⇕",
                        UpEquilibrium: "⥮",
                        upharpoonleft: "↿",
                        upharpoonright: "↾",
                        uplus: "⊎",
                        UpperLeftArrow: "↖",
                        UpperRightArrow: "↗",
                        upsi: "υ",
                        Upsi: "ϒ",
                        upsih: "ϒ",
                        Upsilon: "Υ",
                        upsilon: "υ",
                        UpTeeArrow: "↥",
                        UpTee: "⊥",
                        upuparrows: "⇈",
                        urcorn: "⌝",
                        urcorner: "⌝",
                        urcrop: "⌎",
                        Uring: "Ů",
                        uring: "ů",
                        urtri: "◹",
                        Uscr: "𝒰",
                        uscr: "𝓊",
                        utdot: "⋰",
                        Utilde: "Ũ",
                        utilde: "ũ",
                        utri: "▵",
                        utrif: "▴",
                        uuarr: "⇈",
                        Uuml: "Ü",
                        uuml: "ü",
                        uwangle: "⦧",
                        vangrt: "⦜",
                        varepsilon: "ϵ",
                        varkappa: "ϰ",
                        varnothing: "∅",
                        varphi: "ϕ",
                        varpi: "ϖ",
                        varpropto: "∝",
                        varr: "↕",
                        vArr: "⇕",
                        varrho: "ϱ",
                        varsigma: "ς",
                        varsubsetneq: "⊊︀",
                        varsubsetneqq: "⫋︀",
                        varsupsetneq: "⊋︀",
                        varsupsetneqq: "⫌︀",
                        vartheta: "ϑ",
                        vartriangleleft: "⊲",
                        vartriangleright: "⊳",
                        vBar: "⫨",
                        Vbar: "⫫",
                        vBarv: "⫩",
                        Vcy: "В",
                        vcy: "в",
                        vdash: "⊢",
                        vDash: "⊨",
                        Vdash: "⊩",
                        VDash: "⊫",
                        Vdashl: "⫦",
                        veebar: "⊻",
                        vee: "∨",
                        Vee: "⋁",
                        veeeq: "≚",
                        vellip: "⋮",
                        verbar: "|",
                        Verbar: "‖",
                        vert: "|",
                        Vert: "‖",
                        VerticalBar: "∣",
                        VerticalLine: "|",
                        VerticalSeparator: "❘",
                        VerticalTilde: "≀",
                        VeryThinSpace: " ",
                        Vfr: "𝔙",
                        vfr: "𝔳",
                        vltri: "⊲",
                        vnsub: "⊂⃒",
                        vnsup: "⊃⃒",
                        Vopf: "𝕍",
                        vopf: "𝕧",
                        vprop: "∝",
                        vrtri: "⊳",
                        Vscr: "𝒱",
                        vscr: "𝓋",
                        vsubnE: "⫋︀",
                        vsubne: "⊊︀",
                        vsupnE: "⫌︀",
                        vsupne: "⊋︀",
                        Vvdash: "⊪",
                        vzigzag: "⦚",
                        Wcirc: "Ŵ",
                        wcirc: "ŵ",
                        wedbar: "⩟",
                        wedge: "∧",
                        Wedge: "⋀",
                        wedgeq: "≙",
                        weierp: "℘",
                        Wfr: "𝔚",
                        wfr: "𝔴",
                        Wopf: "𝕎",
                        wopf: "𝕨",
                        wp: "℘",
                        wr: "≀",
                        wreath: "≀",
                        Wscr: "𝒲",
                        wscr: "𝓌",
                        xcap: "⋂",
                        xcirc: "◯",
                        xcup: "⋃",
                        xdtri: "▽",
                        Xfr: "𝔛",
                        xfr: "𝔵",
                        xharr: "⟷",
                        xhArr: "⟺",
                        Xi: "Ξ",
                        xi: "ξ",
                        xlarr: "⟵",
                        xlArr: "⟸",
                        xmap: "⟼",
                        xnis: "⋻",
                        xodot: "⨀",
                        Xopf: "𝕏",
                        xopf: "𝕩",
                        xoplus: "⨁",
                        xotime: "⨂",
                        xrarr: "⟶",
                        xrArr: "⟹",
                        Xscr: "𝒳",
                        xscr: "𝓍",
                        xsqcup: "⨆",
                        xuplus: "⨄",
                        xutri: "△",
                        xvee: "⋁",
                        xwedge: "⋀",
                        Yacute: "Ý",
                        yacute: "ý",
                        YAcy: "Я",
                        yacy: "я",
                        Ycirc: "Ŷ",
                        ycirc: "ŷ",
                        Ycy: "Ы",
                        ycy: "ы",
                        yen: "¥",
                        Yfr: "𝔜",
                        yfr: "𝔶",
                        YIcy: "Ї",
                        yicy: "ї",
                        Yopf: "𝕐",
                        yopf: "𝕪",
                        Yscr: "𝒴",
                        yscr: "𝓎",
                        YUcy: "Ю",
                        yucy: "ю",
                        yuml: "ÿ",
                        Yuml: "Ÿ",
                        Zacute: "Ź",
                        zacute: "ź",
                        Zcaron: "Ž",
                        zcaron: "ž",
                        Zcy: "З",
                        zcy: "з",
                        Zdot: "Ż",
                        zdot: "ż",
                        zeetrf: "ℨ",
                        ZeroWidthSpace: "​",
                        Zeta: "Ζ",
                        zeta: "ζ",
                        zfr: "𝔷",
                        Zfr: "ℨ",
                        ZHcy: "Ж",
                        zhcy: "ж",
                        zigrarr: "⇝",
                        zopf: "𝕫",
                        Zopf: "ℤ",
                        Zscr: "𝒵",
                        zscr: "𝓏",
                        zwj: "‍",
                        zwnj: "‌"
                    },
                    T = {
                        Aacute: "Á",
                        aacute: "á",
                        Acirc: "Â",
                        acirc: "â",
                        acute: "´",
                        AElig: "Æ",
                        aelig: "æ",
                        Agrave: "À",
                        agrave: "à",
                        amp: "&",
                        AMP: "&",
                        Aring: "Å",
                        aring: "å",
                        Atilde: "Ã",
                        atilde: "ã",
                        Auml: "Ä",
                        auml: "ä",
                        brvbar: "¦",
                        Ccedil: "Ç",
                        ccedil: "ç",
                        cedil: "¸",
                        cent: "¢",
                        copy: "©",
                        COPY: "©",
                        curren: "¤",
                        deg: "°",
                        divide: "÷",
                        Eacute: "É",
                        eacute: "é",
                        Ecirc: "Ê",
                        ecirc: "ê",
                        Egrave: "È",
                        egrave: "è",
                        ETH: "Ð",
                        eth: "ð",
                        Euml: "Ë",
                        euml: "ë",
                        frac12: "½",
                        frac14: "¼",
                        frac34: "¾",
                        gt: ">",
                        GT: ">",
                        Iacute: "Í",
                        iacute: "í",
                        Icirc: "Î",
                        icirc: "î",
                        iexcl: "¡",
                        Igrave: "Ì",
                        igrave: "ì",
                        iquest: "¿",
                        Iuml: "Ï",
                        iuml: "ï",
                        laquo: "«",
                        lt: "<",
                        LT: "<",
                        macr: "¯",
                        micro: "µ",
                        middot: "·",
                        nbsp: " ",
                        not: "¬",
                        Ntilde: "Ñ",
                        ntilde: "ñ",
                        Oacute: "Ó",
                        oacute: "ó",
                        Ocirc: "Ô",
                        ocirc: "ô",
                        Ograve: "Ò",
                        ograve: "ò",
                        ordf: "ª",
                        ordm: "º",
                        Oslash: "Ø",
                        oslash: "ø",
                        Otilde: "Õ",
                        otilde: "õ",
                        Ouml: "Ö",
                        ouml: "ö",
                        para: "¶",
                        plusmn: "±",
                        pound: "£",
                        quot: '"',
                        QUOT: '"',
                        raquo: "»",
                        reg: "®",
                        REG: "®",
                        sect: "§",
                        shy: "­",
                        sup1: "¹",
                        sup2: "²",
                        sup3: "³",
                        szlig: "ß",
                        THORN: "Þ",
                        thorn: "þ",
                        times: "×",
                        Uacute: "Ú",
                        uacute: "ú",
                        Ucirc: "Û",
                        ucirc: "û",
                        Ugrave: "Ù",
                        ugrave: "ù",
                        uml: "¨",
                        Uuml: "Ü",
                        uuml: "ü",
                        Yacute: "Ý",
                        yacute: "ý",
                        yen: "¥",
                        yuml: "ÿ"
                    },
                    E = {
                        0: "�",
                        128: "€",
                        130: "‚",
                        131: "ƒ",
                        132: "„",
                        133: "…",
                        134: "†",
                        135: "‡",
                        136: "ˆ",
                        137: "‰",
                        138: "Š",
                        139: "‹",
                        140: "Œ",
                        142: "Ž",
                        145: "‘",
                        146: "’",
                        147: "“",
                        148: "”",
                        149: "•",
                        150: "–",
                        151: "—",
                        152: "˜",
                        153: "™",
                        154: "š",
                        155: "›",
                        156: "œ",
                        158: "ž",
                        159: "Ÿ"
                    },
                    b = [1, 2, 3, 4, 5, 6, 7, 8, 11, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 64976, 64977, 64978, 64979, 64980, 64981, 64982, 64983, 64984, 64985, 64986, 64987, 64988, 64989, 64990, 64991, 64992, 64993, 64994, 64995, 64996, 64997, 64998, 64999, 65e3, 65001, 65002, 65003, 65004, 65005, 65006, 65007, 65534, 65535, 131070, 131071, 196606, 196607, 262142, 262143, 327678, 327679, 393214, 393215, 458750, 458751, 524286, 524287, 589822, 589823, 655358, 655359, 720894, 720895, 786430, 786431, 851966, 851967, 917502, 917503, 983038, 983039, 1048574, 1048575, 1114110, 1114111],
                    A = String.fromCharCode,
                    C = {},
                    y = C.hasOwnProperty,
                    D = function(e, t) {
                        return y.call(e, t)
                    },
                    O = function(e, t) {
                        for(var r = -1, o = e.length; ++r < o;)
                            if(e[r] == t) return !0;
                        return !1
                    },
                    L = function(e, t) {
                        if(!e) return t;
                        var r, o = {};
                        for(r in t) o[r] = D(e, r) ? e[r] : t[r];
                        return o
                    },
                    w = function(e, t) {
                        var r = "";
                        return e >= 55296 && e <= 57343 || e > 1114111 ? (t && _("character reference outside the permissible Unicode range"), "�") : D(E, e) ? (t && _("disallowed character reference"), E[e]) : (t && O(b, e) && _("disallowed character reference"), e > 65535 && (e -= 65536, r += A(e >>> 10 & 1023 | 55296), e = 56320 | 1023 & e), r += A(e))
                    },
                    I = function(e) {
                        return "&#x" + e.charCodeAt(0).toString(16).toUpperCase() + ";"
                    },
                    _ = function(e) {
                        throw Error("Parse error: " + e)
                    },
                    S = function(e, t) {
                        t = L(t, S.options);
                        var r = t.strict;
                        r && g.test(e) && _("forbidden code point");
                        var o = t.encodeEverything,
                            a = t.useNamedReferences,
                            i = t.allowUnsafeSymbols;
                        return o ? (e = e.replace(u, function(e) {
                            return a && D(d, e) ? "&" + d[e] + ";" : I(e)
                        }), a && (e = e.replace(/&gt;\u20D2/g, "&nvgt;").replace(/&lt;\u20D2/g, "&nvlt;").replace(/&#x66;&#x6A;/g, "&fjlig;")), a && (e = e.replace(c, function(e) {
                            return "&" + d[e] + ";"
                        }))) : a ? (i || (e = e.replace(p, function(e) {
                            return "&" + d[e] + ";"
                        })), e = e.replace(/&gt;\u20D2/g, "&nvgt;").replace(/&lt;\u20D2/g, "&nvlt;"), e = e.replace(c, function(e) {
                            return "&" + d[e] + ";"
                        })) : i || (e = e.replace(p, I)), e.replace(s, function(e) {
                            var t = e.charCodeAt(0),
                                r = e.charCodeAt(1),
                                o = 1024 * (t - 55296) + r - 56320 + 65536;
                            return "&#x" + o.toString(16).toUpperCase() + ";"
                        }).replace(l, I)
                    };
                S.options = {
                    allowUnsafeSymbols: !1,
                    encodeEverything: !1,
                    strict: !1,
                    useNamedReferences: !1
                };
                var R = function(e, t) {
                    t = L(t, R.options);
                    var r = t.strict;
                    return r && f.test(e) && _("malformed character reference"), e.replace(m, function(e, o, a, i, n, s, u, l) {
                        var c, d, p, h, f;
                        return o ? (c = o, d = a, r && !d && _("character reference was not terminated by a semicolon"), w(c, r)) : i ? (p = i, d = n, r && !d && _("character reference was not terminated by a semicolon"), c = parseInt(p, 16), w(c, r)) : s ? (h = s, D(v, h) ? v[h] : (r && _("named character reference was not terminated by a semicolon"), e)) : (h = u, f = l, f && t.isAttributeValue ? (r && "=" == f && _("`&` did not start a character reference"), e) : (r && _("named character reference was not terminated by a semicolon"), T[h] + (f || "")))
                    })
                };
                R.options = {
                    isAttributeValue: !1,
                    strict: !1
                };
                var k = function(e) {
                        return e.replace(p, function(e) {
                            return h[e]
                        })
                    },
                    P = {
                        version: "0.5.0",
                        encode: S,
                        decode: R,
                        escape: k,
                        unescape: R
                    };
                if("function" == typeof define && "object" == typeof define.amd && define.amd) define(function() {
                    return P
                });
                else if(a && !a.nodeType)
                    if(i) i.exports = P;
                    else
                        for(var N in P) D(P, N) && (a[N] = P[N]);
                else o.he = P
            }(this)
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}],
    2: [function(e, t, r) {
        "use strict";
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var o = {
            container: null,
            textarea: null,
            toolbar: null,
            commands: [{
                type: "bold",
                tag: "b",
                open: "<strong>",
                close: "</strong>",
                filter: !0
            }, {
                type: "italics",
                tag: "i",
                open: "<em>",
                close: "</em>",
                filter: !0
            }, {
                type: "underline",
                tag: "u",
                open: '<span class="underline">',
                close: "</span>",
                filter: !0
            }, {
                type: "list",
                tag: "ul",
                open: "<ul>",
                close: "</ul>",
                filter: !0
            }, {
                type: "listItem",
                tag: "li",
                open: "<li>",
                close: "</li>",
                filter: !0
            }, {
                type: "code",
                tag: "code",
                open: "<code>",
                close: "</code>",
                filter: !0
            }, {
                type: "quote",
                tag: "quote",
                filter: !0,
                pattern: ['\\[quote="(.*?)"\\]', "\\[quote\\]", "\\[\\/quote\\]"],
                result: ["<blockquote><strong>$1:</strong><br />", "<blockquote>", "</blockquote>"]
            }, {
                type: "url",
                tag: "url",
                filter: !0,
                prompt: "" + LOCALIZATION.URL_PROMPT,
                pattern: ["\\[url\\](.*?)\\[\\/url\\]", '\\[url="(.*?)"\\](.*?)\\[\\/url\\]'],
                result: ['<a href="$1">$1</a>', '<a href="$1">$2</a>']
            }],
            initialize: function(e, t) {
                o.container = $(e), o.textarea = o.container.find("textarea"), t && o.addCommands([{
                    type: "url",
                    tag: "url",
                    filter: !0,
                    prompt: "" + LOCALIZATION.URL_PROMPT,
                    pattern: ["\\[url\\](.*?)\\[\\/url\\]", '\\[url="(.*?)"\\](.*?)\\[\\/url\\]'],
                    result: ['<a href="$1">$1</a>', '<a href="$1">$2</a>']
                }]), o.buildToolbar(), o.contextQuotes()
            },
            addCommands: function(e) {
                o.commands = o.commands.concat(e)
            },
            append: function(e) {
                var t = o.textarea.val();
                "" !== t && (t += "\n\n"), o.textarea.val(t + e)
            },
            createQuoteButton: function() {
                var e = '<div class="Dropdown open TopicPost-button--contextQuote">\n        <div class="Dropdown-menu" data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.QUOTE + '">\n          <div class="Dropdown-items">\n            <span class="Dropdown-item">\n              <svg xmlns="http://www.w3.org/2000/svg">\n                <use xlink:href="#icon-quote" xmlns:xlink="http://www.w3.org/1999/xlink"></use>\n              </svg>\n            </span>\n          </div>\n        </div>\n      </div>';
                return e
            },
            contextQuotes: function(e) {
                $(document).click(function() {
                    "" === o.selection() && $(".TopicPost-button--contextQuote, .Tooltip").remove()
                }), $(e).delegate(".TopicPost-bodyContent", "mouseup", function(e) {
                    var t = o.selection();
                    if($(".TopicPost-button--contextQuote, .Tooltip").remove(), "" !== t && 0 != $(this).siblings(".TopicPost-actions").length) {
                        var r = o.createQuoteButton(),
                            a = $(this).parents(".TopicPost").offset(),
                            i = $(this).parents(".TopicPost").data().topicPost.id;
                        $(r).insertAfter($(this)).click(function() {
                            o.textarea = $(".TopicForm-control--detail"), o.quote(t, i), $(this, ".Tooltip").remove()
                        }).css({
                            top: e.pageY - a.top + 15,
                            left: e.pageX - a.left,
                            position: "absolute"
                        })
                    }
                })
            },
            encode: function(e) {
                return e.replace(/&/gi, "&amp;").replace(/</gi, "&lt;").replace(/>/gi, "&gt;")
            },
            insertTag: function(e) {
                var t, r, a, i, n = o.textarea[0],
                    s = e.tag,
                    u = ["", ""];
                if(e.prompt) {
                    var l = prompt(e.prompt);
                    if(!l) return;
                    u[0] = l, u[1] = '="' + l + '"'
                }
                return a = e.selfClose ? "[" + s + u[1] + " /]" : "[" + s + "]" + u[0] + "[/" + s + "]", r = {
                    value: n.value.substring(n.selectionStart, n.selectionEnd),
                    start: n.selectionStart,
                    end: n.selectionEnd
                }, e.selfClose ? t = o.textarea.val() ? o.textarea.val() + " " + a : a : (i = n.value.substring(0, r.start) + "[" + s + u[1] + "]" + n.value.substring(r.start, r.end), t = n.value.substring(0, r.start) + "[" + s + u[1] + "]" + n.value.substring(r.start, r.end) + "[/" + s + "]" + n.value.substring(r.end, n.value.length)), !!t && (o.textarea.val(t), i.length)
            },
            preview: function(e, t) {
                $.ajax({
                    dataType: "json",
                    data: {
                        post: e,
                        xstoken: Cookie.read("xstoken")
                    },
                    type: "POST",
                    url: "/forum/topic/post/preview",
                    global: !1,
                    success: function(e, r, o) {
                        $(t).empty().append(e.detail).trigger("toggle.topic.preview")
                    },
                    error: function(e, t, r) {
                        "parsererror" === t ? Core.goTo("/account-status", !0) : "error" !== t || e.getAllResponseHeaders() || Login.openOrRedirect()
                    }
                })
            },
            quote: function a(e, t) {
                var a = '[quote="' + t + '"]';
                a += $.trim(e), a += "[/quote]", o.append(a), o.textarea.focus()
            },
            selection: function i() {
                var i;
                return i = window.getSelection ? window.getSelection().toString() : document.selection.createRange().text
            },
            toHtml: function(e) {
                e || (e = o.textarea.val()), e = o.encode(e);
                for(var t = 0; t < o.commands.length; ++t) {
                    var r = o.commands[t];
                    if(r.filter)
                        if(r.pattern && r.result)
                            for(var a = 0; a < r.pattern.length; ++a) e = e.replace(new RegExp(r.pattern[a], "gi"), r.result[a]);
                        else e = e.replace(new RegExp("\\[" + r.tag + "\\]", "gi"), r.open), e = e.replace(new RegExp("\\[\\/" + r.tag + "\\]", "gi"), r.close);
                    r.callback && o[r.callback] && (e = o[r.callback](e, r))
                }
                return e = e.replace(/\n/gi, "<br />"), e = e.replace(/\r/gi, "<br />"), e = e.replace(/<ul><br(.*?)>/gim, "<ul>"), e = e.replace(/<\/li><br(.*?)>/gim, "</li>")
            }
        };
        r["default"] = o, t.exports = r["default"]
    }, {}],
    3: [function(e, t, r) {
        "use strict";
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var o = {
            initialize: function(e) {
                $(".select-avatar").on("click", this.showAvatarSelector), $("body").on("click", ".userAvatar", this.avatarSelected)
            },
            showAvatarSelector: function() {
                var e = Core.projectUrl + "/" + Core.language + "/" + Core.community + "/pref/avatar",
                    t = Core.projectUrl + "/" + Core.language + "/" + Core.community + "/pref/avatar/user-selection",
                    r = {
                        xstoken: Cookie.read("xstoken")
                    },
                    a = "GET";
                $.when($.ajax({
                    data: r,
                    dataType: "JSON",
                    type: a,
                    url: e
                }), $.ajax({
                    data: r,
                    dataType: "JSON",
                    type: a,
                    url: t
                })).done(o.avatarsLoaded)
            },
            avatarsLoaded: function(e, t) {
                var r = e[0],
                    o = t[0].avatar.id,
                    a = "userAvatar";
                $(".userAvatars").empty();
                for(var i in r.avatars) r.avatars[i].id == o ? (a = "userAvatar selected", $(".userAvatars").prepend("<span class='" + a + "' id='" + r.avatars[i].id + "'><img src='" + r.avatars[i].cdnUrl + "'/></span>")) : (a = "userAvatar", $(".userAvatars").append("<span class='" + a + "' id='" + r.avatars[i].id + "'><img src='" + r.avatars[i].cdnUrl + "'/></span>"));
                $(".CharacterSelect-modal").toggleClass("is-active"), $("body").css("overflow", "hidden")
            },
            avatarSelected: function() {
                var e = $(this).attr("id"),
                    t = Core.projectUrl + "/" + Core.language + "/" + Core.community + "/pref/avatar?avatarId=" + e,
                    r = {
                        xstoken: Cookie.read("xstoken")
                    },
                    a = "POST";
                $.ajax({
                    data: r,
                    type: a,
                    url: t,
                    success: o.submitSelectedAvatarSuccess
                })
            },
            submitSelectedAvatarSuccess: function(e) {
                $(".TopicForm-author img").attr("src", e.avatar.cdnUrl), $(".User-menu img").attr("src", e.avatar.cdnUrl);
                var t = void 0;
                $(".Author-data").length ? t = $(".Author-data").data().topicForm.userId : $(".TopicForm-author").length && (t = $(".TopicForm-author").data().topicForm.userId), $(".TopicPost").each(function() {
                    var r = $(this).data().topicPost.author.id;
                    r == t && $(this).find("img").attr("src", e.avatar.cdnUrl)
                }), $(".CharacterSelect-modal").toggleClass("is-active"), $("body").css("overflow", "visible")
            }
        };
        r["default"] = o, t.exports = r["default"]
    }, {}],
    4: [function(e, t, r) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var i = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            n = e("../bml"),
            s = o(n),
            u = "bmltoolbar",
            l = "" + u,
            c = "." + l,
            d = {
                BML_BOLD: "bml.bold" + c,
                BML_ITALICS: "bml.italics" + c,
                BML_UNDERLINE: "bml.underline" + c,
                BML_LIST: "bml.list" + c,
                BML_LISTITEM: "bml.listItem" + c,
                BML_CODE: "bml.code" + c,
                BML_QUOTE: "bml.quote" + c,
                BML_URL: "bml.url" + c,
                TOOLBAR_CLICK: "click" + c
            },
            p = {
                BML_TOOLBAR: "#BmlToolbar",
                DATA_TOPIC_FORM_DETAIL: "[data-topic-post-body-edit],[data-topic-form-detail]"
            },
            h = function() {
                function e(t) {
                    a(this, e), this.element = t, this._EVENT = d, this._SELECTOR = p, this._addEventListeners(), s["default"].contextQuotes(t)
                }
                return i(e, [{
                    key: "_addEventListeners",
                    value: function() {
                        var e = this;
                        $(this.element).on(this.EVENT.TOOLBAR_CLICK, p.BML_TOOLBAR, this.handleToolbarClick).on(this.EVENT.BML_BOLD, function() {
                            return e.handleBML("bold")
                        }).on(this.EVENT.BML_ITALICS, function() {
                            return e.handleBML("italics")
                        }).on(this.EVENT.BML_UNDERLINE, function() {
                            return e.handleBML("underline")
                        }).on(this.EVENT.BML_LIST, function() {
                            return e.handleBML("list")
                        }).on(this.EVENT.BML_LISTITEM, function() {
                            return e.handleBML("listItem")
                        }).on(this.EVENT.BML_CODE, function() {
                            return e.handleBML("code")
                        }).on(this.EVENT.BML_QUOTE, function() {
                            return e.handleBML("quote")
                        }).on(this.EVENT.BML_URL, function() {
                            return e.handleBML("url")
                        })
                    }
                }, {
                    key: "handleBML",
                    value: function(e) {
                        var t = void 0;
                        s["default"].textarea = $(this.element).find(".TopicForm-control--detail").focus();
                        var r = $.grep(s["default"].commands, function(t) {
                            return t.type == e
                        })[0];
                        t = s["default"].insertTag(r), t && (s["default"].textarea[0].setSelectionRange(t, t), s["default"].textarea.focus())
                    }
                }, {
                    key: "handleToolbarClick",
                    value: function(e) {
                        $(this).siblings(p.DATA_TOPIC_FORM_DETAIL).focus()
                    }
                }, {
                    key: "EVENT",
                    get: function() {
                        return this._EVENT
                    },
                    set: function(e) {
                        return this._EVENT = e
                    }
                }]), e
            }();
        r["default"] = h, t.exports = r["default"]
    }, {
        "../bml": 2
    }],
    5: [function(e, t, r) {
        "use strict";
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var o = {
            initialize: function(e) {
                $("body").on("click", "[data-select-character], .TopicForm-button--selectCharacter", function() {
                    $(".CharacterSelect-modal").toggleClass("is-active").find(".CharacterSelect-search--input").focus(), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && $(".CharacterSelect-search--input").blur(), $("body").css("overflow", "hidden"), $(".Characters").on("scroll", function() {
                        var e = $(this).scrollTop();
                        e > 0 ? $(".CharacterSelect-title").addClass("is-scrolled") : $(".CharacterSelect-title").removeClass("is-scrolled")
                    })
                }), $("body").on("click", function(e) {
                    "CharacterSelect-modal" != e.target.id && "CharacterSelect-modal--close" != e.target.id || ($(".CharacterSelect-modal").removeClass("is-active"), $("body").css("overflow", "visible"))
                }), $(document).on("keydown", function(e) {
                    27 === e.keyCode && ($(".CharacterSelect-modal").removeClass("is-active"), $("body").css("overflow", "visible"))
                }), $("body").on("keyup", ".CharacterSelect-search--input", function() {
                    $(".CharacterSelect-modal--inner").width($(".CharacterSelect-modal--inner").width());
                    var e = $(this).val().toLowerCase().split(/\s+/);
                    $(".UserCharacter").each(function() {
                        var t = 0;
                        for(var r in e) $(this).text().toLowerCase().search(e[r]) > -1 && t++;
                        t == e.length ? $(this).css("display", "flex") : $(this).css("display", "none")
                    })
                }), $("body").on("click", ".UserCharacter", function() {
                    var t = $(this).attr("id"),
                        r = $(".Characters").data("loc-attr"),
                        o = e + "/pref/character?index=" + t + "&topicId=" + r.topicId + "&forumId=" + r.forumId,
                        a = {
                            xstoken: Cookie.read("xstoken")
                        },
                        i = "POST";
                    $.ajax({
                        data: a,
                        dataType: "html",
                        type: i,
                        url: o,
                        xhrFields: {
                            withCredentials: !0
                        },
                        success: function(e) {
                            var t = $(e)[0],
                                r = $(t).data("user-error"),
                                o = $(t).find(".Dropdown-item--profileLink").attr("href"),
                                a = $(t).find(".Dropdown-item--postHistory").attr("href");
                            $(".CharacterSelect-modal").replaceWith($(t).find(".CharacterSelect-modal")), r ? ($(".LoginPlaceholder")[0] ? ($("#topic-reply").load(location.href + " #topic-reply>*", ""), $(".CreateTopic-container").load(location.href + " .CreateTopic-container>*", "")) : $(".TopicForm-author .Author").replaceWith($(t).find(".Author")), $(".Topic-controls").load(location.href + " .Topic-controls>*", ""), $(".Forum-controls").load(location.href + " .Forum-controls>*", "")) : ($("#topic-reply").load(location.href + " #topic-reply>*", ""), $(".CreateTopic-container").load(location.href + " .CreateTopic-container>*", ""), $(".Topic-controls").load(location.href + " .Topic-controls>*", ""), $(".Forum-controls").load(location.href + " .Forum-controls>*", "")), $(".User-menu").replaceWith($(t).find(".User-menu")), $(".menu-item--profileLink").attr("href", o), $(".menu-item--postHistory").attr("href", a), $(".character-info .Author").replaceWith($(t).find(".Author")), $(".CharacterSelect-modal").removeClass("is-active"), $("body").css("overflow", "visible"), $(".TopicForm").removeClass("is-previewing").addClass("is-editing")
                        }
                    })
                })
            }
        };
        r["default"] = o, t.exports = r["default"]
    }, {}],
    6: [function(e, t, r) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var i = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            n = e("./Util"),
            s = o(n),
            u = function(e) {
                var t = "dropping",
                    r = "nexus.dropdown",
                    o = "." + r,
                    n = ".data-api",
                    u = e.fn[t],
                    l = {
                        HIDE: "hide" + o,
                        HIDDEN: "hidden" + o,
                        SHOW: "show" + o,
                        SHOWN: "shown" + o,
                        CLICK: "click" + o,
                        CLICK_DATA_API: "click" + o + n,
                        KEYDOWN_DATA_API: "keydown" + o + n
                    },
                    c = {
                        BACKDROP: "Dropdown-backdrop",
                        ARROW: "Dropdown-arrow",
                        DISABLED: "is-disabled",
                        MENU_ITEM: "Dropdown-item",
                        OPEN: "open",
                        DROPDOWN: "dropdown"
                    },
                    d = {
                        ARROW: "." + c.ARROW,
                        BACKDROP: "." + c.BACKDROP,
                        DATA_TRIGGER: '[data-trigger="toggle.dropdown.menu"],[data-toggle="dropdown"]',
                        MENU_ITEMS: "." + c.MENU_ITEM
                    },
                    p = function() {
                        function t(e) {
                            a(this, t), this._element = e, this._addEventListeners()
                        }
                        return i(t, [{
                            key: "toggle",
                            value: function() {
                                if(this.disabled || e(this).hasClass(c.DISABLED)) return !1;
                                var r = t._getDropdownFromElement(this);
                                e(r).hasClass(c.DROPDOWN) && e(r).toggleClass(c.OPEN);
                                var o = e(r).hasClass(c.OPEN),
                                    a = "ontouchstart" in document.documentElement || e(r).data("backdrop");
                                if(t._clearMenus(), o) return !1;
                                if(a) {
                                    var i = document.createElement("div");
                                    i.className = c.BACKDROP, e(i).insertBefore(this), e(i).on("click", t._clearMenus)
                                }
                                var n = {
                                        relatedTarget: this
                                    },
                                    s = e.Event(l.SHOW, n);
                                return e(r).trigger(s), !s.isDefaultPrevented() && (this.focus(), e(r).toggleClass(c.OPEN), e("input[name=page]").focus().select(), e(r).trigger(e.Event(l.SHOWN, n)), !1)
                            }
                        }, {
                            key: "dispose",
                            value: function() {
                                e.removeData(this._element, r), e(this._element).off(o), this._element = null
                            }
                        }, {
                            key: "_addEventListeners",
                            value: function() {
                                e(this._element).on(l.CLICK, this.toggle)
                            }
                        }], [{
                            key: "_jQueryInterface",
                            value: function(o) {
                                return this.each(function() {
                                    var a = e(this).data(r);
                                    a || e(this).data(r, a = new t(this)), "string" == typeof o && a[o].call(this)
                                })
                            }
                        }, {
                            key: "_getDropdownFromElement",
                            value: function(t) {
                                var r = void 0,
                                    o = s["default"].getTargetFromElement(t);
                                return o && (r = e(o)[0] || e("[data-id=" + o + "]")[0]), r || t.parentNode
                            }
                        }, {
                            key: "_dataApiKeydownHandler",
                            value: function(r) {
                                if(!/(38|40|27|32)/.test(r.which) || /input|textarea/i.test(r.target.tagName)) return !1;
                                if(r.preventDefault(), r.stopPropagation(), this.disabled || e(this).hasClass(c.DISABLED)) return !1;
                                var o = t._getDropdownFromElement(this),
                                    a = e(o).hasClass(c.OPEN);
                                if(!a && 27 !== r.which || a && 27 === r.which) {
                                    if(27 === r.which) {
                                        var i = e(o).find(d.DATA_TRIGGER)[0];
                                        e(i).trigger("focus")
                                    }
                                    return e(this).trigger("click")
                                }
                            }
                        }, {
                            key: "_clearMenus",
                            value: function(r) {
                                var o = e(d.BACKDROP)[0];
                                o && o.parentNode.removeChild(o);
                                for(var a = e.makeArray(e(d.DATA_TRIGGER)), i = 0; i < a.length; i++) {
                                    var n = t._getDropdownFromElement(a[i]),
                                        s = {
                                            relatedTarget: a[i]
                                        };
                                    if(e(n).hasClass(c.OPEN) && !(r && "click" === r.type && /input|textarea/i.test(r.target.tagName) && e.contains(n, r.target))) {
                                        var u = e.Event(l.HIDE, s);
                                        e(n).trigger(u), u.isDefaultPrevented() || e(n).removeClass(c.OPEN).trigger(e.Event(l.HIDDEN, s))
                                    }
                                }
                                e(".Tooltip").remove()
                            }
                        }]), t
                    }();
                return e(document).on(l.KEYDOWN_DATA_API, d.DATA_TRIGGER, p._dataApiKeydownHandler).on(l.CLICK_DATA_API, p._clearMenus).on(l.CLICK_DATA_API, d.DATA_TRIGGER, p.prototype.toggle), e.fn[t] = p._jQueryInterface, e.fn[t].Constructor = p, e.fn[t].noConflict = function() {
                    return e.fn[t] = u, p._jQueryInterface
                }, p
            }(jQuery);
        r["default"] = u, t.exports = r["default"]
    }, {
        "./Util": 11
    }],
    7: [function(e, t, r) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var i = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            n = e("./BmlToolbar"),
            s = o(n),
            u = "forum",
            l = "" + u,
            c = "." + l,
            d = Cookie.read("xstoken"),
            p = {
                CLICK: "click" + c,
                CREATE_TOPIC: "create.topicpost" + c,
                PREVIEW_CREATE_TOPIC: "preview.topicpost" + c,
                EDIT_CREATE_TOPIC: "edit.topicpost" + c,
                SUBMIT_CREATE_TOPIC: "submit.topicpost" + c
            },
            h = {
                PREVIEW_CREATE_TOPIC: Core.baseUrl + "/topic/post/preview"
            },
            f = {
                ICON: ".Icon",
                BUTTON: "[data-forum-button]",
                TOPIC_POST_BUTTON: "[data-topic-post-button]",
                BUTTON_CONTENT: ".Button-content",
                TOGGLE_CREATE_TOPIC: "#toggle-create-topic",
                CREATE_TOPIC: "#create-topic",
                CREATE_TOPIC_SUBJECT: "[data-topic-form-subject]",
                CREATE_TOPIC_DETAIL: "[data-topic-form-detail]",
                PREVIEW_CREATE_TOPIC: "[data-topic-post-preview]",
                EDIT_CREATE_TOPIC: "[data-create-topic-edit]",
                FORUM_TOPIC: "[data-forum-topic]"
            },
            g = function() {
                function e(t) {
                    a(this, e), t.length && (new s["default"](t), this.element = t, this.DATA = $(t).data(), this.EVENT = p, this.URL = h, this.SEL = f, this.XSTOKEN = Cookie.read("xstoken"), this.topicEditState = void 0, this.viewingHistory = void 0, this._DEFAULT_TOGGLE_CREATE_TOPIC_BUTTON_CONTENT = $(this.SEL.TOGGLE_CREATE_TOPIC).find(this.SEL.BUTTON_CONTENT), this._ACTIVE_TOGGLE_CREATE_TOPIC_BUTTON_CONTENT = $(this._DEFAULT_TOGGLE_CREATE_TOPIC_BUTTON_CONTENT).clone().empty().append($(this._DEFAULT_TOGGLE_CREATE_TOPIC_BUTTON_CONTENT).find(".Icon").clone()).append($(this.SEL.TOGGLE_CREATE_TOPIC).data("active-text")), this.handleVisitedTopic(), this.handleActiveSortState(), this.unpostedPrompt(), this._addEventListeners())
                }
                return i(e, [{
                    key: "_addEventListeners",
                    value: function() {
                        var e = this;
                        $(this.element).on(this.EVENT.CLICK, this.SEL.BUTTON, this.handleClickButton).on(this.EVENT.CLICK, this.SEL.TOPIC_POST_BUTTON, this.handleClickButton).on(this.EVENT.CREATE_TOPIC, function(t, r, o, a) {
                            return e.handleCreateTopic(r, o, a)
                        }).on(this.EVENT.PREVIEW_CREATE_TOPIC, function() {
                            return e.handlePreviewTopicCreate()
                        }).on(this.EVENT.EDIT_CREATE_TOPIC, function() {
                            return e.handleEditTopicCreate()
                        })
                    }
                }, {
                    key: "unpostedPrompt",
                    value: function() {
                        $(window).on("beforeunload", function() {
                            var e = !1;
                            if(0 == $("[data-topic-form-subject]").length && 0 == $("[data-topic-form-detail]").length || (e = !0), e && (0 != $("[data-topic-form-subject]").val() || 0 != $("[data-topic-form-detail]").val())) return "" + LOCALIZATION.UNPOSTED_PROMPT
                        })
                    }
                }, {
                    key: "handleActiveSortState",
                    value: function() {
                        /latest/i.test(window.location.pathname) ? ($(".Forum-button--Hot").removeClass("active-tab"), $(".Forum-button--Latest").addClass("active-tab"), $("body").removeClass("hot")) : /hot/i.test(window.location.pathname) && ($(".Forum-button--Latest").removeClass("active-tab"), $(".Forum-button--Hot").addClass("active-tab"), $("body").addClass("hot"))
                    }
                }, {
                    key: "handleVisitedTopic",
                    value: function() {
                        var e = [],
                            t = [],
                            r = [],
                            o = JSON.parse(localStorage.getItem("visited-topics"));
                        if(null === o) return !1;
                        for(var a in o.topicData) e.push(a), t.push(o.topicData[a].topicLastPosition), r.push(o.topicData[a].topicLastPage);
                        $(this.SEL.FORUM_TOPIC).each(function() {
                            var o = $(this).data("forum-topic");
                            for(var a in e)
                                if(o.id == e[a]) {
                                    o.lastPosition === t[a] && $(this).addClass("is-read");
                                    var i = new RegExp("[?&]page=([^&#]*)").exec(r[a]);
                                    null != i && i[1] > 1 && $(this).attr("href", r[a])
                                }
                        })
                    }
                }, {
                    key: "handleClickButton",
                    value: function(e) {
                        var t = this,
                            r = $(t).data(),
                            o = $.Event(r.trigger),
                            a = $(e.delegateTarget);
                        $(a).trigger(o, [a, t, r])
                    }
                }, {
                    key: "handleCreateTopic",
                    value: function(e, t, r) {
                        return r.isActive ? this.hideTopicCreate(e, t, r) : this.showTopicCreate(e, t, r)
                    }
                }, {
                    key: "handlePreviewTopicCreate",
                    value: function() {
                        var e = this,
                            t = {
                                xstoken: d,
                                post: $(this.element).find(this.SEL.CREATE_TOPIC_DETAIL).val()
                            };
                        $(this.SEL.PREVIEW_CREATE_TOPIC).remove(), $.ajax({
                            method: "POST",
                            url: this.URL.PREVIEW_CREATE_TOPIC,
                            data: t
                        }).done(function(t) {
                            return e.insertTopicCreatePreview(t.detail)
                        }).fail(function(e) {
                            return console.log("Error previewing", e)
                        })
                    }
                }, {
                    key: "showTopicCreate",
                    value: function(e, t, r) {
                        $(this.SEL.BUTTON).addClass("is-active").data("is-active", !0), $(".Section--secondary").toggleClass("is-hidden"), $(this.SEL.CREATE_TOPIC_SUBJECT).focus(), $("body").on("focus", this.SEL.CREATE_TOPIC_DETAIL, function() {
                            $(this).addClass("active")
                        }), this.toggleTopicCreatePreviewState("editing", !0, !1)
                    }
                }, {
                    key: "hideTopicCreate",
                    value: function(e, t, r) {
                        $(this.SEL.BUTTON).removeClass("is-active").data("is-active", !1), $(this.SEL.CREATE_TOPIC).toggleClass("is-editing"), $(".Section--secondary").toggleClass("is-hidden"), $(this.SEL.CREATE_TOPIC_SUBJECT).blur(), $(this.SEL.CREATE_TOPIC_DETAIL).removeClass("active"), this.toggleTopicCreatePreviewState(void 0, !1, !1)
                    }
                }, {
                    key: "insertTopicCreatePreview",
                    value: function(e) {
                        var t = $(this.element).find(this.SEL.CREATE_TOPIC_DETAIL)[0],
                            r = this.buildTopicPreview(e);
                        return $(r).insertAfter(t), $(this.SEL.CREATE_TOPIC_DETAIL).removeClass("active"), this.toggleTopicCreatePreviewState("previewing", !1, !0)
                    }
                }, {
                    key: "handleEditTopicCreate",
                    value: function() {
                        return $(this.SEL.CREATE_TOPIC_DETAIL).addClass("active").focus(), "editing" !== this.topicEditState && ("previewing" === this.topicEditState ? this.toggleTopicCreatePreviewState("editing") : void 0)
                    }
                }, {
                    key: "toggleTopicCreatePreviewState",
                    value: function(e, t, r) {
                        this.topicEditState = e, $(this.SEL.CREATE_TOPIC).toggleClass("is-editing", t).toggleClass("is-previewing", r), $(this.SEL.CREATE_TOPIC_DETAIL).focus()
                    }
                }, {
                    key: "buildTopicPreview",
                    value: function(e) {
                        var t = '<div class="TopicPost-body TopicPost-body--preview"\n           data-topic-post-preview="true">' + e + "</div>";
                        return t
                    }
                }]), e
            }();
        r["default"] = g, t.exports = r["default"]
    }, {
        "./BmlToolbar": 4
    }],
    8: [function(e, t, r) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var i = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            n = e("./Util"),
            s = o(n),
            u = e("he"),
            l = o(u),
            c = "tooltip",
            d = "4.0.0",
            p = "nexus.tooltip",
            h = "." + p,
            f = $.fn[c],
            g = "bs-tether",
            m = {
                animation: !0,
                template: '<div class="Tooltip" role="tooltip"><div class="Tooltip-arrow-top"></div><div class="Tooltip-content"></div><div class="Tooltip-arrow-bottom"></div></div>',
                trigger: "hover focus",
                title: "",
                delay: 0,
                html: !1,
                selector: !1,
                placement: "bottom",
                offset: "0 0",
                constraints: []
            },
            v = {
                animation: "boolean",
                template: "string",
                title: "(string|function)",
                trigger: "string",
                delay: "(number|object)",
                html: "boolean",
                selector: "(string|boolean)",
                placement: "(string|function)",
                offset: "string",
                constraints: "array"
            },
            T = {
                TOP: "bottom center",
                RIGHT: "middle left",
                BOTTOM: "top center",
                LEFT: "middle right"
            },
            E = {
                IN: "in",
                OUT: "out"
            },
            b = {
                HIDE: "hide" + h,
                HIDDEN: "hidden" + h,
                SHOW: "show" + h,
                SHOWN: "shown" + h,
                INSERTED: "inserted" + h,
                CLICK: "click" + h,
                FOCUSIN: "focusin" + h,
                FOCUSOUT: "focusout" + h,
                MOUSEENTER: "mouseenter" + h,
                MOUSELEAVE: "mouseleave" + h
            },
            A = {
                FADE: "fade",
                IN: "in"
            },
            C = {
                TOOLTIP: ".Tooltip",
                TOOLTIP_CONTENT: ".Tooltip-content"
            },
            y = {
                element: !1,
                enabled: !1
            },
            D = {
                HOVER: "hover",
                FOCUS: "focus",
                CLICK: "click",
                MANUAL: "manual"
            },
            O = function() {
                function e(t, r) {
                    a(this, e), this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._tether = void 0, this.element = t, this.config = this._getConfig(r), this.tip = void 0, this._setListeners()
                }
                return i(e, [{
                    key: "enable",
                    value: function() {
                        this._isEnabled = !0
                    }
                }, {
                    key: "disable",
                    value: function() {
                        this._isEnabled = !1
                    }
                }, {
                    key: "toggleEnabled",
                    value: function() {
                        this._isEnabled = !this._isEnabled
                    }
                }, {
                    key: "toggle",
                    value: function(e) {
                        if(e) {
                            var t = this.constructor.DATA_KEY,
                                r = $(e.currentTarget).data(t);
                            r || (r = new this.constructor(e.currentTarget, this._getDelegateConfig()), $(e.currentTarget).data(t, r)), r._activeTrigger.click = !r._activeTrigger.click, r._isWithActiveTrigger() ? r._enter(null, r) : r._leave(null, r)
                        } else {
                            if($(this.getTipElement()).hasClass(A.IN)) return void this._leave(null, this);
                            this._enter(null, this)
                        }
                    }
                }, {
                    key: "dispose",
                    value: function() {
                        clearTimeout(this._timeout), this.cleanupTether(), $.removeData(this.element, this.constructor.DATA_KEY), $(this.element).off(this.constructor.EVENT_KEY), this.tip && $(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._tether = null, this.element = null, this.config = null, this.tip = null
                    }
                }, {
                    key: "show",
                    value: function() {
                        var t = this,
                            r = $.Event(this.constructor.Event.SHOW);
                        if(this.isWithContent() && this._isEnabled) {
                            $(this.element).trigger(r);
                            var o = $.contains(this.element.ownerDocument.documentElement, this.element);
                            if(r.isDefaultPrevented() || !o) return;
                            var a = this.getTipElement(),
                                i = s["default"].getUID(this.constructor.NAME);
                            a.setAttribute("id", i), this.element.setAttribute("aria-describedby", i), this.setContent(), this.config.animation && $(a).addClass(A.FADE);
                            var n = "function" == typeof this.config.placement ? this.config.placement.call(this, a, this.element) : this.config.placement,
                                u = this._getAttachment(n);
                            $(a).data(this.constructor.DATA_KEY, this).appendTo(document.body), $(this.element).trigger(this.constructor.Event.INSERTED), this._tether = new Tether({
                                attachment: u,
                                element: a,
                                target: this.element,
                                classes: y,
                                classPrefix: g,
                                offset: this.config.offset,
                                constraints: this.config.constraints
                            }), s["default"].reflow(a), this._tether.position(), $(a).addClass(A.IN);
                            var l = function() {
                                var e = t._hoverState;
                                t._hoverState = null, $(t.element).trigger(t.constructor.Event.SHOWN), e === E.OUT && t._leave(null, t)
                            };
                            if(s["default"].supportsTransitionEnd() && $(this.tip).hasClass(A.FADE)) return void $(this.tip).one(s["default"].TRANSITION_END, l).emulateTransitionEnd(e._TRANSITION_DURATION);
                            l()
                        }
                    }
                }, {
                    key: "hide",
                    value: function(e) {
                        var t = this,
                            r = this.getTipElement(),
                            o = $.Event(this.constructor.Event.HIDE),
                            a = function() {
                                t._hoverState !== E.IN && r.parentNode && r.parentNode.removeChild(r), t.element.removeAttribute("aria-describedby"), $(t.element).trigger(t.constructor.Event.HIDDEN), t.cleanupTether(), e && e()
                            };
                        $(this.element).trigger(o), o.isDefaultPrevented() || ($(r).removeClass(A.IN), a(), this._hoverState = "")
                    }
                }, {
                    key: "isWithContent",
                    value: function() {
                        return Boolean(this.getTitle())
                    }
                }, {
                    key: "getTipElement",
                    value: function() {
                        return this.tip = this.tip || $(this.config.template)[0]
                    }
                }, {
                    key: "setContent",
                    value: function() {
                        var e = this.getTipElement(),
                            t = this.getTitle();
                        $(e).find(C.TOOLTIP_CONTENT).text(t), $(e).removeClass(A.FADE).removeClass(A.IN), this.cleanupTether()
                    }
                }, {
                    key: "getTitle",
                    value: function() {
                        var e = this.element.getAttribute("data-tooltip-content");
                        return e || (e = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), l["default"].unescape(e)
                    }
                }, {
                    key: "cleanupTether",
                    value: function() {
                        this._tether && (this._tether.destroy(), $(this.element).removeClass(this._removeTetherClasses), $(this.tip).removeClass(this._removeTetherClasses))
                    }
                }, {
                    key: "_getAttachment",
                    value: function(e) {
                        return T[e.toUpperCase()]
                    }
                }, {
                    key: "_setListeners",
                    value: function() {
                        var e = this,
                            t = this.config.trigger.split(" ");
                        t.forEach(function(t) {
                            if("click" === t) $(e.element).on(e.constructor.Event.CLICK, e.config.selector, $.proxy(e.toggle, e));
                            else if(t !== D.MANUAL) {
                                var r = t === D.HOVER ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                    o = t === D.HOVER ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                                $(e.element).on(r, e.config.selector, $.proxy(e._enter, e)).on(o, e.config.selector, $.proxy(e._leave, e))
                            }
                        }), this.config.selector ? this.config = $.extend({}, this.config, {
                            trigger: "manual",
                            selector: ""
                        }) : this._fixTitle()
                    }
                }, {
                    key: "_removeTetherClasses",
                    value: function(e, t) {
                        return((t.baseVal || t).match(new RegExp("(^|\\s)" + g + "-\\S+", "g")) || []).join(" ")
                    }
                }, {
                    key: "_fixTitle",
                    value: function() {
                        var e = typeof this.element.getAttribute("data-original-title");
                        (this.element.getAttribute("title") || "string" !== e) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                    }
                }, {
                    key: "_enter",
                    value: function(e, t) {
                        var r = this.constructor.DATA_KEY;
                        return t = t || $(e.currentTarget).data(r), t || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), $(e.currentTarget).data(r, t)), e && (t._activeTrigger["focusin" === e.type ? D.FOCUS : D.HOVER] = !0), $(t.getTipElement()).hasClass(A.IN) || t._hoverState === E.IN ? void(t._hoverState = E.IN) : (clearTimeout(t._timeout), t._hoverState = E.IN, t.config.delay && t.config.delay.show ? void(t._timeout = setTimeout(function() {
                            t._hoverState === E.IN && t.show()
                        }, t.config.delay.show)) : void t.show())
                    }
                }, {
                    key: "_leave",
                    value: function(e, t) {
                        var r = this.constructor.DATA_KEY;
                        return t = t || $(e.currentTarget).data(r), t || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), $(e.currentTarget).data(r, t)), e && (t._activeTrigger["focusout" === e.type ? D.FOCUS : D.HOVER] = !1), clearTimeout(t._timeout), t._hoverState = E.OUT, t.config.delay && t.config.delay.hide ? void(t._timeout = setTimeout(function() {
                            t._hoverState === E.OUT && t.hide()
                        }, t.config.delay.hide)) : void t.hide()
                    }
                }, {
                    key: "_isWithActiveTrigger",
                    value: function() {
                        for(var e in this._activeTrigger)
                            if(this._activeTrigger[e]) return !0;
                        return !1
                    }
                }, {
                    key: "_getConfig",
                    value: function(e) {
                        return e = $.extend({}, this.constructor.Default, $(this.element).data("tooltip"), e), e.delay && "number" == typeof e.delay && (e.delay = {
                            show: e.delay,
                            hide: e.delay
                        }), s["default"].typeCheckConfig(c, e, this.constructor.DefaultType), e
                    }
                }, {
                    key: "_getDelegateConfig",
                    value: function() {
                        var e = {};
                        if(this.config)
                            for(var t in this.config) this.constructor.Default[t] !== this.config[t] && (e[t] = this.config[t]);
                        return e
                    }
                }], [{
                    key: "_jQueryInterface",
                    value: function(t) {
                        return this.each(function() {
                            var r = $(this).data(p),
                                o = "object" == typeof t ? t : null;
                            !r && /destroy|hide/.test(t) || (r || (r = new e(this, o), $(this).data(p, r)), "string" == typeof t && r[t]())
                        })
                    }
                }, {
                    key: "VERSION",
                    get: function() {
                        return d
                    }
                }, {
                    key: "Default",
                    get: function() {
                        return m
                    }
                }, {
                    key: "NAME",
                    get: function() {
                        return c
                    }
                }, {
                    key: "DATA_KEY",
                    get: function() {
                        return p
                    }
                }, {
                    key: "Event",
                    get: function() {
                        return b
                    }
                }, {
                    key: "EVENT_KEY",
                    get: function() {
                        return h
                    }
                }, {
                    key: "DefaultType",
                    get: function() {
                        return v
                    }
                }]), e
            }();
        $.fn[c] = O._jQueryInterface, $.fn[c].Constructor = O, $.fn[c].noConflict = function() {
            return $.fn[c] = f, O._jQueryInterface
        }, r["default"] = O, t.exports = r["default"]
    }, {
        "./Util": 11,
        he: 1
    }],
    9: [function(e, t, r) {
        "use strict";

        function o(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var a = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            i = "topic",
            n = Cookie.read("xstoken"),
            s = {
                CLICK: "click." + i,
                PREVIEW: "preview." + i + ".reply",
                EDIT: "edit." + i + ".reply",
                EDIT_TITLE: "edit.title." + i
            },
            u = {
                EDIT_TOPIC: Core.baseUrl + "/" + Core.community + "/topic",
                PREVIEW_TOPIC_POST: Core.baseUrl + "/topic/post/preview"
            },
            l = {
                BUTTON: "[data-topic-button]",
                MENU_BUTTON: "[data-topic-menu-button]",
                REPLY_BUTTON: "#Button-reply",
                HEADING: "[data-topic-heading]",
                DATA_REPLY_BODY_EDIT: "#detail",
                TOPIC_REPLY_CONTAINER: "#topic-reply",
                PREVIEW_BUTTON: "[data-topic-menu-button]"
            },
            c = function() {
                function e(t) {
                    o(this, e), this.element = t, this.DATA = $(t).data(), this.EVENT = s, this.URL = u, this.SEL = l, this.XSTOKEN = n, this._addEventListeners(), this.addTargetBlankToAnchors(), this.createVisitedTopic(t), this.handleTopicFormFocus()
                }
                return a(e, [{
                    key: "_addEventListeners",
                    value: function() {
                        var e = this;
                        $(this.element).on(this.EVENT.CLICK, this.SEL.BUTTON, this.handleClickButton).on(this.EVENT.CLICK, this.SEL.REPLY_BUTTON, this.handleReplyFocus).on(this.EVENT.CLICK, this.SEL.MENU_BUTTON, this.handleClickButton).on(this.EVENT.EDIT, function() {
                            return e.handleEditTopicReply()
                        }).on(this.EVENT.PREVIEW, function() {
                            return e.handlePreview()
                        }).on(this.EVENT.EDIT_TITLE, function() {
                            return e.handleEditTitle()
                        })
                    }
                }, {
                    key: "handleEditTitle",
                    value: function() {
                        var e = this,
                            t = $(this.element).find(this.SEL.HEADING).text(),
                            r = prompt(LOCALIZATION.TOPIC_TITLE, t),
                            o = this.URL.EDIT_TOPIC + "/" + this.DATA.topic.id + "/edit",
                            a = {
                                xstoken: this.XSTOKEN,
                                subject: r
                            },
                            i = "POST";
                        t != r && null != r && "" != r && $.ajax({
                            url: o,
                            data: a,
                            method: i
                        }).done(function(t) {
                            $(e.element).find(e.SEL.HEADING).text(r), alert(LOCALIZATION.UPDATE_SUCCESS)
                        }).fail(function(e) {
                            alert(LOCALIZATION.ERROR_UPDATE)
                        })
                    }
                }, {
                    key: "handleEditTopicReply",
                    value: function() {
                        return $(this.SEL.DATA_REPLY_BODY_EDIT).addClass("active").focus(), "editing" !== this.topicEditState && ("previewing" === this.topicEditState ? this.toggleTopicReplyPreviewState("editing") : void 0)
                    }
                }, {
                    key: "handlePreview",
                    value: function() {
                        var e = this,
                            t = {
                                xstoken: n,
                                post: $(this.element).find(this.SEL.DATA_REPLY_BODY_EDIT).val()
                            };
                        $(".TopicPost-body--preview").remove(), $.ajax({
                            method: "POST",
                            url: this.URL.PREVIEW_TOPIC_POST,
                            data: t
                        }).done(function(t) {
                            return e.insertTopicReplyPreview(t.detail)
                        }).fail(function(e) {
                            return console.log("Error previewing", e)
                        })
                    }
                }, {
                    key: "insertTopicReplyPreview",
                    value: function(e) {
                        var t = $(this.element).find(this.SEL.DATA_REPLY_BODY_EDIT)[0],
                            r = this.buildTopicReplyPreview(e);
                        return $(r).insertAfter(t), $(this.SEL.DATA_REPLY_BODY_EDIT).removeClass("active"), this.toggleTopicReplyPreviewState("previewing", !1, !0)
                    }
                }, {
                    key: "buildTopicReplyPreview",
                    value: function(e) {
                        var t = '<div class="TopicPost-body TopicPost-body--preview"\n           data-topic-post-preview="true">' + e + "</div>";
                        return t
                    }
                }, {
                    key: "toggleTopicReplyPreviewState",
                    value: function(e, t, r) {
                        this.topicEditState = e, $(this.SEL.TOPIC_REPLY_CONTAINER).toggleClass("is-editing", t).toggleClass("is-previewing", r), $(this.SEL.DATA_REPLY_BODY_EDIT).focus()
                    }
                }, {
                    key: "handleReplyFocus",
                    value: function(e) {
                        $(l.TOPIC_REPLY_CONTAINER).focus(), $(l.DATA_REPLY_BODY_EDIT).focus()
                    }
                }, {
                    key: "handleTopicFormFocus",
                    value: function(e) {
                        $("body").on("click", function(e) {
                            $("body .TopicForm-group-content").is(e.target) || 0 !== $("body .TopicForm-group-content").has(e.target).length ? $("body .TopicForm-control--detail").addClass("has-focus") : $("body .TopicForm-control--detail").removeClass("has-focus")
                        })
                    }
                }, {
                    key: "addTargetBlankToAnchors",
                    value: function() {
                        $(".TopicPost-bodyContent").each(function() {
                            $(this).find("a").each(function() {
                                $(this).attr("target", "_blank")
                            })
                        })
                    }
                }, {
                    key: "createVisitedTopic",
                    value: function(e) {
                        var t = e.data("topic");
                        if(void 0 === t) return !1;
                        var r = JSON.parse(localStorage.getItem("visited-topics")) || {};
                        r.topicData = r.topicData || {}, r.topicData[t.id] = r.topicData[t.id] || {}, r.topicData[t.id].topicLastPosition = t.lastPosition, r.topicData[t.id].topicLastPage = location.href, this.isLocalStorageNameSupported() && localStorage.setItem("visited-topics", JSON.stringify(r))
                    }
                }, {
                    key: "isLocalStorageNameSupported",
                    value: function() {
                        var e = "test";
                        try {
                            return localStorage.setItem(e, "1"), localStorage.removeItem(e), !0
                        } catch(t) {
                            return !1
                        }
                    }
                }, {
                    key: "handleClickButton",
                    value: function(e) {
                        var t = e.currentTarget,
                            r = $(t).data(),
                            o = $.Event(r.trigger),
                            a = e.delegateTarget;
                        return !r.disabled && void $(a).trigger(o)
                    }
                }]), e
            }();
        r["default"] = c, t.exports = r["default"]
    }, {}],
    10: [function(e, t, r) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var i = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            n = e("../bml"),
            s = o(n),
            u = e("./BmlToolbar"),
            l = o(u),
            c = e("he"),
            d = o(c),
            p = "topicpost",
            h = "" + p,
            f = "." + h,
            g = Core.projectUrl + "/" + Core.language,
            m = g + "/topic/post",
            v = "ignoredUsers",
            T = Cookie.read("xstoken"),
            E = {
                BLUR: "blur" + f,
                CLICK: "click" + f,
                TOGGLE_EDIT: "toggle.edit" + f,
                PREVIEW: "preview" + f,
                CANCEL: "cancel" + f,
                UPDATE: "update" + f,
                EDIT: "edit" + f,
                FOCUS: "focus" + f,
                DELETE: "delete" + f,
                DELETE_CANCEL: "cancel.delete" + f,
                REPORT_CANCEL: "cancel.report" + f,
                REPORT_SUBMIT: "report.submit" + f,
                REPORT_PREVIEW: "report.preview" + f,
                VOTE_UP: "vote.up" + f,
                VOTE_DOWN: "vote.down" + f,
                ACTIVE: "active" + f,
                QUOTE: "quote" + f,
                SOLUTION: "solution" + f,
                IGNORE_USER: "ignore.user" + f,
                UNIGNORE_USER: "unignore.user" + f,
                VIEW_POST: "view.post" + f,
                POLL_VOTE_LOGIN: "login" + f,
                POLL_VOTE: "poll.vote" + f,
                POLL_RESULT: "poll.result" + f
            },
            b = {
                TOPIC_POST: g + "/" + Core.community + "/topic/post",
                POLL_URL: g + "/" + Core.community + "/poll/",
                PREVIEW: m + "/preview",
                DELETE: m + "/delete",
                REPORT: "report"
            },
            A = {
                DATA_BUTTON: "[data-topic-post-button]",
                DATA_MENU_BUTTON: "[data-menu-button]",
                DATA_TOPIC_POST: "[data-topic-post]",
                DATA_POST_FORM: "[data-topic-post-form]",
                DATA_POST_BODY: "[data-topic-post-body]",
                DATA_POST_BODY_CONTENT: "[data-topic-post-body-content]",
                DATA_POST_BODY_RANK: "[data-topic-post-rank]",
                DATA_POST_PREVIEW: "[data-topic-post-preview]",
                DATA_POST_BODY_EDIT: "[data-topic-post-body-edit]",
                DATA_TOPIC_FORM: "[data-topic-form]",
                DATA_REPLY_BODY_EDIT: "#detail",
                COPY_URL: "[data-clipboard-text]",
                VIEW_POST_BUTTON: "[data-topic-viewpost-button]",
                IGNORE_BUTTON: "[data-topic-post-ignore-button]",
                UNIGNORE_BUTTON: "[data-topic-post-unignore-button]",
                IGNORED_AUTHOR: "[data-topic-post-ignored-author]",
                DATA_USER: "[data-user]",
                HEADING: "[data-topic-heading]"
            },
            C = function() {
                function e(t) {
                    a(this, e), new l["default"](t), this.element = t, this._editState = void 0, this._cachedQuotes = [], this._DATA = $(t).data(), this._EVENT = E, this._URL = b, this._SELECTOR = A, this._addEventListeners(), this.initIgnoredUsers(), this.initBuriedPosts(), this.unpostedPrompt(), this.pollInit()
                }
                return i(e, [{
                    key: "_addEventListeners",
                    value: function() {
                        var e = this;
                        $(this.element).is("#topic-reply") || $(this.element).on("submit", function(e) {
                            return e.preventDefault()
                        }), $(this.element).on(this.EVENT.CLICK, A.DATA_BUTTON, this.handleClickButton).on(this.EVENT.CLICK, A.COPY_URL, this.handleCopyUrl).on(this.EVENT.FOCUS, A.DATA_REPLY_BODY_EDIT, this.handleFocus).on(this.EVENT.EDIT, function() {
                            return e.handleEdit()
                        }).on(this.EVENT.PREVIEW, function() {
                            return e.handlePreview()
                        }).on(this.EVENT.CANCEL, function() {
                            return e.handleCancel()
                        }).on(this.EVENT.UPDATE, function() {
                            return e.handleUpdate()
                        }).on(this.EVENT.DELETE, function() {
                            return e.handleDelete()
                        }).on(this.EVENT.VOTE_UP, function() {
                            return e.handleRankAction("up")
                        }).on(this.EVENT.VOTE_DOWN, function() {
                            return e.handleRankAction("down")
                        }).on(this.EVENT.QUOTE, function() {
                            return e.handleQuote()
                        }).on(this.EVENT.REPORT_PREVIEW, function() {
                            return e.handleReportPreview()
                        }).on(this.EVENT.REPORT_SUBMIT, function() {
                            return e.handleReportSubmit()
                        }).on(this.EVENT.REPORT_CANCEL, function() {
                            return e.handleCancel()
                        }).on(this.EVENT.SOLUTION, function() {
                            return e.handleSolution()
                        }).on(this.EVENT.IGNORE_USER, function() {
                            return e.handleIgnoreUser()
                        }).on(this.EVENT.UNIGNORE_USER, function() {
                            return e.handleUnignoreUser()
                        }).on(this.EVENT.VIEW_POST, function() {
                            return e.showPost(e.element)
                        }).on(this.EVENT.POLL_VOTE, function() {
                            return e.submitVote(e.element)
                        }).on(this.EVENT.POLL_VOTE_LOGIN, function() {
                            return e.pollLogin(e.element)
                        }).on(this.EVENT.POLL_RESULT, function() {
                            return e.showPollResult(e.element)
                        }), $(document).on(this.EVENT.MOUSEDOWN, function() {
                            $(e.element).find(".TopicForm-group").removeClass("TopicForm-group--isActive")
                        })
                    }
                }, {
                    key: "unpostedPrompt",
                    value: function() {
                        $(window).on("beforeunload", function() {
                            $("#detail").length;
                            if(0 != $("#detail").length && 0 != $("#detail").val()) return "" + LOCALIZATION.UNPOSTED_PROMPT
                        })
                    }
                }, {
                    key: "pollInit",
                    value: function() {
                        var e = parseInt($("#topic-poll").data("max-checked"));
                        0 != e && $("#topic-poll input:checkbox").on("click", function(t) {
                            var r = $("#topic-poll input:checked").length;
                            r >= e ? $("#topic-poll input:not(:checked)").prop("disabled", !0) : $("#topic-poll input:not(:checked)").prop("disabled", !1)
                        })
                    }
                }, {
                    key: "showPollResult",
                    value: function(e) {
                        $(".Poll").toggleClass("options-only"), $(".Poll").toggleClass("results-only"), $(".Poll-actions--vote").toggleClass("hidden"), $(".Poll-actions--result").toggleClass("hidden")
                    }
                }, {
                    key: "submitVote",
                    value: function() {
                        var e = [],
                            t = this.DATA.topic.pollId;
                        return $("#poll-container input:checked").each(function() {
                            e.push(this.value)
                        }), 0 === e.length ? void alert("Please make a selection first") : void $.ajax({
                            type: "POST",
                            url: "" + this.URL.POLL_URL + t + "/vote",
                            data: "selection=" + e.join("&selection=") + "&xstoken=" + Cookie.read("xstoken"),
                            success: function() {
                                location.reload()
                            }
                        })
                    }
                }, {
                    key: "hidePost",
                    value: function(e, t) {
                        $(e).find(this.SELECTOR.VIEW_POST_BUTTON).removeClass("is-hidden"), t ? ($(e).addClass("is-ignored"), $(e).find(this.SELECTOR.IGNORED_AUTHOR).removeClass("is-hidden")) : $(e).find(this.SELECTOR.DATA_POST_BODY_CONTENT).addClass("is-buried")
                    }
                }, {
                    key: "showPost",
                    value: function(e) {
                        $(e).removeClass("is-ignored"), $(e).find(this.SELECTOR.DATA_POST_BODY_CONTENT).removeClass("is-buried"), $(e).find(this.SELECTOR.VIEW_POST_BUTTON).addClass("is-hidden"), $(e).find(this.SELECTOR.IGNORED_AUTHOR).addClass("is-hidden")
                    }
                }, {
                    key: "showIgnoreUserMenuButton",
                    value: function(e) {
                        $(e).find(this.SELECTOR.IGNORE_BUTTON).removeClass("is-hidden"), $(e).find(this.SELECTOR.UNIGNORE_BUTTON).addClass("is-hidden")
                    }
                }, {
                    key: "hideIgnoreUserMenuButton",
                    value: function(e) {
                        $(e).find(this.SELECTOR.IGNORE_BUTTON).addClass("is-hidden"), $(e).find(this.SELECTOR.UNIGNORE_BUTTON).removeClass("is-hidden")
                    }
                }, {
                    key: "showAllPostsByAuthor",
                    value: function(e) {
                        var t = this,
                            r = $(this.SELECTOR.DATA_TOPIC_POST);
                        r.each(function(r, o) {
                            var a = o.dataset.topicPost,
                                i = JSON.parse(a) || {};
                            if(i.author) {
                                var n = i.author.id;
                                e == n && (t.showPost(o), t.showIgnoreUserMenuButton(o))
                            }
                        })
                    }
                }, {
                    key: "hideAllPostsByAuthor",
                    value: function(e) {
                        var t = this,
                            r = $(this.SELECTOR.DATA_TOPIC_POST);
                        r.each(function(r, o) {
                            var a = o.dataset.topicPost,
                                i = JSON.parse(a) || {};
                            if(i.author) {
                                var n = i.author.id;
                                e == n && (t.hidePost(o, !0), t.hideIgnoreUserMenuButton(o))
                            }
                        })
                    }
                }, {
                    key: "initIgnoredUsers",
                    value: function() {
                        if(this.getCurrentUser() && this.DATA.topicPost.author) {
                            var e = this.getIgnoredUsers(),
                                t = this.DATA.topicPost.author.id;
                            e[t] && (this.hidePost(this.element, !0), this.hideIgnoreUserMenuButton(this.element))
                        }
                    }
                }, {
                    key: "initBuriedPosts",
                    value: function() {
                        $(this.element).hasClass("is-buried") && this.hidePost(this.element, !1)
                    }
                }, {
                    key: "handleCopyUrl",
                    value: function() {
                        var e = this,
                            t = location.href.split("/").slice(0, 3).join("/"),
                            r = $(this).attr("data-clipboard-text"),
                            o = r.match(RegExp(t, "g")),
                            a = new Clipboard("span[data-clipboard-text]");
                        o ? a.on("error", function(e) {
                            prompt("" + LOCALIZATION.COPY_LINK, r), a.destroy()
                        }) : ! function() {
                            var o = t + r;
                            $(e).attr("data-clipboard-text", o), a.on("error", function(e) {
                                prompt("" + LOCALIZATION.COPY_LINK, o), a.destroy()
                            })
                        }()
                    }
                }, {
                    key: "handleFocus",
                    value: function(e) {
                        $(this).addClass("active")
                    }
                }, {
                    key: "handleClickButton",
                    value: function(e) {
                        var t = this,
                            r = $(t).data(),
                            o = $.Event(r.trigger),
                            a = $(e.delegateTarget);
                        return !r.disabled && void $(a).trigger(o)
                    }
                }, {
                    key: "createReportForm",
                    value: function(e) {
                        var t = '<select name="type" class="Topic-button--reportDetail" id="topic-button-reportDetail" required="required">\n        <option value="SPAMMING">' + LOCALIZATION.SPAMMING + '</option>\n        <option value="TROLLING">' + LOCALIZATION.TROLLING + '</option>\n        <option value="ADVERTISING_STRADING">' + LOCALIZATION.ADVERTISING_STRADING + '</option>\n        <option value="REAL_LIFE_THREATS">' + LOCALIZATION.REAL_LIFE_THREATS + '</option>\n        <option value="OTHER">' + LOCALIZATION.OTHER + "</option>\n      </select>",
                            r = '<div class="TopicPostReport" data-topic-post-form="true" id="topic-post-report-form">\n        <span class="TopicPostReport-heading">' + LOCALIZATION.REPORT + '\n          <a class="TopicPostReport-button--close" data-topic-post-button="true"\n            data-trigger="' + this.EVENT.REPORT_CANCEL + '"></a>\n        </span>\n        <fieldset>\n          <input type="hidden" name="xstoken" value="' + T + '"></input>\n          <input type="hidden" name="sessionPersist" value="forum.topic.post.report"></input>\n        </fieldset>\n        <div class="Topic-button-report">\n          ' + t + '\n        </div>\n        <form class="Form">\n          <div class="TopicForm-group">\n            <textarea class="TopicForm-control TopicForm-control--detail"\n              data-topic-post-body-edit="true" id="topic-post-report-report"\n              name="reason" tab-index="1" required="required"></textarea>\n          </div>\n          <button class="TopicForm-button TopicForm-button--report"\n            data-topic-post-button="true"\n            data-trigger="' + this.EVENT.REPORT_SUBMIT + '" type="button">\n            <span class="Button-content">' + LOCALIZATION.REPORT + "</span>\n          </button>\n        </form>\n      </div>";
                        return r
                    }
                }, {
                    key: "createEditForm",
                    value: function(e) {
                        var t = this.DATA.topic,
                            r = $(this.SELECTOR.HEADING).text(),
                            o = t ? '<input type="hidden" name="featured" value="' + t.featured + '"></input>\n         <input type="hidden" name="sticky" value="' + t.sticky + '"></input>\n         <input type="hidden" name="locked" value="' + t.locked + '"></input>\n         <input type="hidden" name="frozen" value="' + t.frozen + '"></input>\n         <input type="hidden" name="hidden" value="' + t.hidden + '"></input>\n         <input type="hidden" name="pollId" value="' + t.pollId + '"></input>\n         <input type="hidden" name="subject" value="' + d["default"].escape(r) + '"></input>' : "",
                            a = '<form action="#edit" class="Form" data-topic-post-form="true"\n        id="topic-post-edit-form">\n        <fieldset>\n          <input type="hidden" name="xstoken" value="' + T + '"></input>\n          <input type="hidden" name="sessionPersist" value="forum.topic.post.edit"></input>\n          ' + o + '\n        </fieldset>\n        <div class="TopicForm-group TopicForm-group-content TopicForm-group--isActivated" data-topic-form="true">\n          <div class="TopicForm-errors error-message"></div>\n          <textarea\n            class="TopicForm-control TopicForm-control--detail active"\n            data-topic-post-body-edit="true" id="topic-post-edit-detail"\n            name="postCommand.detail" tab-index="1" required="required"\n            spellcheck="true">' + e + '</textarea>\n          <div class="BmlToolbar" id="BmlToolbar">\n          <div class="BmlToolbar--content">\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.BOLD + '"\n              data-topic-post-button="true" data-trigger="bml.bold.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--bold"></i>\n            </span>\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.ITALICS + '"\n              data-topic-post-button="true" data-trigger="bml.italics.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--italics"></i>\n            </span>\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.UNDERLINE + '"\n              data-topic-post-button="true" data-trigger="bml.underline.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--underline"></i>\n            </span>\n            <span class="BmlToolbar-divider"></span>\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.LIST + '"\n              data-topic-post-button="true" data-trigger="bml.list.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--list"></i>\n            </span>\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.LIST_ITEM + '"\n              data-topic-post-button="true" data-trigger="bml.listItem.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--list-item"></i>\n            </span>\n            <span class="BmlToolbar-divider"></span>\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.QUOTE + '"\n              data-topic-post-button="true" data-trigger="bml.quote.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--quote"></i>\n            </span>\n            <span data-toggle="tooltip" data-tooltip-content="' + LOCALIZATION.CODE + '"\n              data-topic-post-button="true" data-trigger="bml.code.bmltoolbar"\n              class="BmlToolbar-button">\n              <i class="Icon Icon--16 Icon--black--toolbar Icon--code"></i>\n            </span>\n          </div>\n          </div>\n        </div>\n        <button class="TopicForm-button TopicForm-button--editPost"\n                data-topic-post-button="true"\n                data-trigger="' + this.EVENT.EDIT + '" type="button">\n          <span class="Button-content">' + LOCALIZATION.EDIT + '</span>\n        </button>\n        <button class="TopicForm-button TopicForm-button--update"\n                data-topic-post-button="true"\n                data-trigger="' + this.EVENT.UPDATE + '" type="submit">\n          <span class="Button-content">' + LOCALIZATION.SAVE + '</span>\n        </button>\n        <button class="TopicForm-button TopicForm-button--previewEdit"\n                data-topic-post-button="true"\n                data-trigger="' + this.EVENT.PREVIEW + '" type="button">\n          <span class="Button-content">' + LOCALIZATION.PREVIEW + '</span>\n        </button>\n        <button class="TopicForm-button TopicForm-button--cancel"\n                data-topic-post-button="true"\n                data-trigger="' + this.EVENT.CANCEL + '" type="button">\n          <span class="Button-content">' + LOCALIZATION.CANCEL + "</span>\n        </button>\n      </form>";
                        return a
                    }
                }, {
                    key: "createPreview",
                    value: function(e) {
                        var t = '<div class="TopicPost-body TopicPost-body--preview"\n           data-topic-post-preview="true">' + e + "</div>";
                        return t
                    }
                }, {
                    key: "removeEditForm",
                    value: function() {
                        return $(this.element).find(this.SELECTOR.DATA_POST_FORM).remove()
                    }
                }, {
                    key: "handleEdit",
                    value: function(e) {
                        var t = this;
                        if("editing" === this.editState) return !1;
                        if("previewing" === this.editState) return this.toggleEditPreviewMode("editing");
                        var r = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/frag";
                        $.ajax({
                            url: r
                        }).done(function(e) {
                            return t.insertEditForm(e.detail)
                        }).fail(function(e) {
                            return alert("" + LOCALIZATION.ERROR_EDIT, e)
                        })
                    }
                }, {
                    key: "handlePreview",
                    value: function(e) {
                        var t = this;
                        if("previewing" === this.editState) return !1;
                        var r = {
                            xstoken: T,
                            post: $(this.element).find(this.SELECTOR.DATA_POST_BODY_EDIT).val()
                        };
                        $(this.SELECTOR.DATA_POST_PREVIEW).remove(), $.ajax({
                            type: "POST",
                            url: this.URL.PREVIEW,
                            data: r
                        }).done(function(e) {
                            return t.insertPreview(e.detail)
                        }).fail(function(e) {
                            return alert("" + LOCALIZATION.ERROR_PREVIEW, e)
                        })
                    }
                }, {
                    key: "handleQuote",
                    value: function(e) {
                        var t = +this.DATA.topicPost.id,
                            r = this.URL.TOPIC_POST + "/" + t + "/frag",
                            o = this.cachedQuotes;
                        if(s["default"].textarea = $(this.SELECTOR.DATA_REPLY_BODY_EDIT), o[t]) {
                            var a = o[t];
                            s["default"].quote(a.detail, t)
                        } else $.ajax({
                            dataType: "json",
                            type: "GET",
                            url: r,
                            success: function(e) {
                                o[t] = e, s["default"].quote(e.detail, t)
                            }
                        })
                    }
                }, {
                    key: "handleUpdate",
                    value: function(t) {
                        var r = this,
                            o = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/edit",
                            a = $(this.element).find(this.SELECTOR.DATA_POST_FORM).serialize();
                        return $.ajax({
                            url: o,
                            type: "POST",
                            data: a
                        }).done(function(e) {
                            return r.handleSuccess(e)
                        }).fail(function(t) {
                            return $("div.PostForm-errors").html(e.jsonToList(t.responseJSON))
                        })
                    }
                }, {
                    key: "handleSuccess",
                    value: function(e) {
                        var t = $(this.element).find(".TopicPost-bodyContent");
                        return $(t).empty().html(e.detail), this.removeEditForm(), this.toggleEditPreviewMode(void 0, !1, !1)
                    }
                }, {
                    key: "handleCancel",
                    value: function(e) {
                        this.removeEditForm(), this.toggleEditPreviewMode(void 0, !1, !1), this.toggleReportPostPreviewMode(void 0, !1)
                    }
                }, {
                    key: "handleDelete",
                    value: function(e) {
                        if(!confirm("" + LOCALIZATION.DELETE_CONFIRM)) return !1;
                        var t = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/delete",
                            r = {
                                xstoken: T
                            },
                            o = "POST";
                        $.ajax({
                            url: t,
                            type: o,
                            data: r
                        }).done(function(e) {
                            alert("" + LOCALIZATION.DELETE_SUCCESS)
                        }).fail(function(e) {
                            return alert("" + LOCALIZATION.ERROR_DELETE)
                        })
                    }
                }, {
                    key: "handleIgnoreUser",
                    value: function(e) {
                        this.ignoreUser("" + this.DATA.topicPost.author.id), this.hideAllPostsByAuthor(this.DATA.topicPost.author.id)
                    }
                }, {
                    key: "handleUnignoreUser",
                    value: function(e) {
                        this.unignoreUser("" + this.DATA.topicPost.author.id), this.showAllPostsByAuthor(this.DATA.topicPost.author.id)
                    }
                }, {
                    key: "getIgnoredUsers",
                    value: function() {
                        var e = this.getIgnoredUsersMasterList(),
                            t = this.getCurrentUser();
                        return t && e[t] || {}
                    }
                }, {
                    key: "getIgnoredUsersMasterList",
                    value: function() {
                        return JSON.parse(localStorage.getItem(v)) || {}
                    }
                }, {
                    key: "getCurrentUser",
                    value: function() {
                        var e = $(this.SELECTOR.DATA_USER),
                            t = JSON.parse(e[0].dataset.user) || {};
                        return t.id
                    }
                }, {
                    key: "ignoreUser",
                    value: function(e) {
                        if(this.getCurrentUser()) {
                            var t = this.getIgnoredUsersMasterList();
                            t[this.getCurrentUser()] || (t[this.getCurrentUser()] = {}), t[this.getCurrentUser()][e] = !0, this.saveIgnoredUsers(t)
                        }
                    }
                }, {
                    key: "unignoreUser",
                    value: function(e) {
                        if(this.getCurrentUser()) {
                            var t = this.getIgnoredUsersMasterList();
                            t[this.getCurrentUser()] && delete t[this.getCurrentUser()][e], this.saveIgnoredUsers(t)
                        }
                    }
                }, {
                    key: "saveIgnoredUsers",
                    value: function(e) {
                        localStorage.setItem(v, JSON.stringify(e))
                    }
                }, {
                    key: "handleSolution",
                    value: function(e) {
                        var t = this,
                            r = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/solution",
                            o = {
                                xstoken: T,
                                mark: !0
                            },
                            a = "POST";
                        $(this.element).hasClass("is-solution") && (o.mark = !1), $.ajax({
                            url: r,
                            type: a,
                            data: o
                        }).done(function(e) {
                            t.toggleSolutionMessages(o), location.href.replace(r), location.reload(!0)
                        }).fail(function(e) {
                            return alert("Error marking as solution")
                        })
                    }
                }, {
                    key: "toggleSolutionMessages",
                    value: function(e) {
                        e.mark === !0 ? alert("" + LOCALIZATION.SOLUTION_MARK) : alert("" + LOCALIZATION.SOLUTION_UNMARK)
                    }
                }, {
                    key: "handleReportPreview",
                    value: function(e) {
                        return "reporting" !== this.reportState && (this.reportState = "reporting", void this.insertReportForm())
                    }
                }, {
                    key: "handleReportSubmit",
                    value: function(e) {
                        var t = $(this.element).find(this.SELECTOR.DATA_POST_FORM),
                            r = {
                                xstoken: Cookie.read("xstoken")
                            },
                            o = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/" + this.URL.REPORT + "?type=" + t.find("[name='type']").val() + "&reason=" + t.find("[name='reason']").val(),
                            a = "POST",
                            i = "application/json";
                        return $.ajax({
                            contentType: i,
                            url: o,
                            type: a,
                            data: r
                        }).done(function(e) {
                            return alert("" + LOCALIZATION.REPORT_SUCCESS)
                        }).fail(function(e) {
                            return alert("" + LOCALIZATION.ERROR_REPORT)
                        }), this.toggleReportPostPreviewMode(void 0, !1), this.removeEditForm()
                    }
                }, {
                    key: "handleAction",
                    value: function(e) {
                        var t = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/" + e,
                            r = {
                                xstoken: T
                            },
                            o = "POST";
                        $.ajax({
                            type: o,
                            url: t,
                            data: r
                        }).done(function(r) {
                            alert(e + " successful!"), location.href.replace(t), location.reload(!0)
                        }).fail(function(t) {
                            return alert(e + " unsuccessful!")
                        })
                    }
                }, {
                    key: "handleRankAction",
                    value: function(e) {
                        var t = this,
                            r = this.URL.TOPIC_POST + "/" + this.DATA.topicPost.id + "/" + e,
                            o = {
                                xstoken: T
                            },
                            a = "POST";
                        $.ajax({
                            type: a,
                            url: r,
                            data: o
                        }).done(function(e) {
                            var r = $(t.element).find(t.SELECTOR.DATA_POST_BODY_RANK)[0],
                                o = $(t.element).closest(t.SELECTOR.DATA_TOPIC_POST),
                                a = "" + t.DATA.topicPost.rank.voteUp,
                                i = "" + t.DATA.topicPost.rank.voteDown,
                                n = "" + t.DATA.topicPost.valueVoted,
                                s = a - i + e.vote - n;
                            r.innerHTML = s, s > 0 ? t.toggleRankMode(r, !0, !1, !1) : s < 0 ? t.toggleRankMode(r, !1, !0, !1) : t.toggleRankMode(r, !1, !1, !0), e.vote > 0 ? t.toggleLikeMode(o, !0) : e.vote < 0 ? t.toggleLikeMode(o, !1) : ($(o).removeClass("is-user-liked"), $(".TopicPost-button--like").blur(), $(o).removeClass("is-user-disliked"), $(".TopicPost-button--dislike").blur())
                        })
                    }
                }, {
                    key: "toggleRankMode",
                    value: function(e, t, r, o) {
                        $(e).toggleClass("TopicPost-rank--up", t), $(e).toggleClass("TopicPost-rank--down", r), $(e).toggleClass("TopicPost-rank--none", o)
                    }
                }, {
                    key: "toggleLikeMode",
                    value: function(e, t) {
                        $(e).toggleClass("is-user-liked", t), $(e).toggleClass("is-user-disliked", !t)
                    }
                }, {
                    key: "insertReportForm",
                    value: function() {
                        var e = this.DATA.topicPost,
                            t = this.createReportForm(e),
                            r = $(this.element).find(this.SELECTOR.DATA_POST_BODY)[0];
                        $(t).insertAfter(r), $("#topic-button-reportDetail").focus()
                    }
                }, {
                    key: "insertEditForm",
                    value: function(e) {
                        var t = d["default"].escape(e),
                            r = this.createEditForm(t),
                            o = $(this.element).find(this.SELECTOR.DATA_POST_BODY)[0];
                        return $(r).insertBefore(o), this.toggleEditPreviewMode("editing", !0, !1)
                    }
                }, {
                    key: "insertPreview",
                    value: function(e) {
                        var t = $(this.element).find(this.SELECTOR.DATA_POST_BODY_EDIT)[0],
                            r = this.createPreview(e);
                        return $(r).insertAfter(t), this.toggleEditPreviewMode("previewing", !1, !0)
                    }
                }, {
                    key: "toggleEditPreviewMode",
                    value: function(e, t, r) {
                        return this.editState = e, $(this.element).toggleClass("is-editing", t).toggleClass("is-previewing", r)
                    }
                }, {
                    key: "toggleReportPostPreviewMode",
                    value: function(e, t) {
                        return this.reportState = e, $(this.element).toggleClass("is-reporting", t)
                    }
                }, {
                    key: "DATA",
                    get: function() {
                        return this._DATA
                    },
                    set: function(e) {
                        return this._DATA = e
                    }
                }, {
                    key: "editState",
                    get: function() {
                        return this._editState
                    },
                    set: function(e) {
                        return this._editState = e
                    }
                }, {
                    key: "EVENT",
                    get: function() {
                        return this._EVENT
                    },
                    set: function(e) {
                        return this._EVENT = e
                    }
                }, {
                    key: "URL",
                    get: function() {
                        return this._URL
                    },
                    set: function(e) {
                        return this._URL = e
                    }
                }, {
                    key: "SELECTOR",
                    get: function() {
                        return this._SELECTOR
                    },
                    set: function(e) {
                        return this._SELECTOR = e
                    }
                }, {
                    key: "cachedQuotes",
                    get: function() {
                        return this._cachedQuotes
                    },
                    set: function(e) {
                        return this._cachedQuotes = e
                    }
                }], [{
                    key: "jsonToList",
                    value: function(e) {
                        var t = "<ul>";
                        for(var r in e)
                            for(var o in e[r]) t += "<li>" + e[r][o] + "</li>\n";
                        return t += "</ul>"
                    }
                }]), e
            }();
        r["default"] = C, t.exports = r["default"]
    }, {
        "../bml": 2,
        "./BmlToolbar": 4,
        he: 1
    }],
    11: [function(e, t, r) {
        "use strict";
        Object.defineProperty(r, "__esModule", {
            value: !0
        });
        var o = function(e) {
            function t(e) {
                return {}.toString.call(e).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
            }

            function r(e) {
                return(e[0] || e).nodeType
            }

            function o() {
                return {
                    bindType: s.end,
                    delegateType: s.end,
                    handle: function(t) {
                        if(e(t.target).is(this)) return t.handleObj.handler.apply(this, arguments)
                    }
                }
            }

            function a() {
                if(window.QUnit) return !1;
                var e = document.createElement("bootstrap");
                for(var t in u)
                    if(void 0 !== e.style[t]) return {
                        end: u[t]
                    };
                return !1
            }

            function i(t) {
                var r = this,
                    o = !1;
                return e(this).one(l.TRANSITION_END, function() {
                    o = !0
                }), setTimeout(function() {
                    o || l.triggerTransitionEnd(r)
                }, t), this
            }

            function n() {
                s = a(), e.fn.emulateTransitionEnd = i, l.supportsTransitionEnd() && (e.event.special[l.TRANSITION_END] = o())
            }
            var s = !1,
                u = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    transition: "transitionend"
                },
                l = {
                    TRANSITION_END: "bsTransitionEnd",
                    getUID: function(e) {
                        do e += ~~(1e6 * Math.random()); while (document.getElementById(e));
                        return e
                    },
                    getSelectorFromElement: function(e) {
                        var t = e.getAttribute("data-target");
                        return t || (t = e.getAttribute("href") || "", t = /^#[a-z]/i.test(t) ? t : null), t
                    },
                    getTargetFromElement: function(e) {
                        var t = e.getAttribute("data-target");
                        return t || (t = e.getAttribute("href") || "", t = /^[#|\.][a-z]/i.test(t) ? t : null), t
                    },
                    reflow: function(e) {
                        new Function("bs", "return bs")(e.offsetHeight)
                    },
                    triggerTransitionEnd: function(t) {
                        e(t).trigger(s.end)
                    },
                    supportsTransitionEnd: function() {
                        return Boolean(s)
                    },
                    typeCheckConfig: function(e, o, a) {
                        for(var i in a)
                            if(a.hasOwnProperty(i)) {
                                var n = a[i],
                                    s = o[i],
                                    u = void 0;
                                if(u = s && r(s) ? "element" : t(s), !new RegExp(n).test(u)) throw new Error(e.toUpperCase() + ": " + ('Option "' + i + '" provided type "' + u + '" ') + ('but expected type "' + n + '".'))
                            }
                    }
                };
            return n(), l
        }(jQuery);
        r["default"] = o, t.exports = r["default"]
    }, {}],
    12: [function(e, t, r) {
        "use strict";

        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        var i = function() {
                function e(e, t) {
                    for(var r = 0; r < t.length; r++) {
                        var o = t[r];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function(t, r, o) {
                    return r && e(t.prototype, r), o && e(t, o), t
                }
            }(),
            n = e("./components/Util"),
            s = (o(n), e("./components/Dropdown")),
            u = (o(s), e("./components/Tooltip")),
            l = (o(u), e("./components/BmlToolbar")),
            c = (o(l), e("./bml.js")),
            d = (o(c), e("./components/Forum")),
            p = o(d),
            h = e("./components/Topic"),
            f = o(h),
            g = e("./components/TopicPost"),
            m = o(g),
            v = e("./components/CharacterSelect"),
            T = o(v),
            E = e("./components/AvatarSelect"),
            b = o(E);
        e("./topic-submission"), window.addEventListener("load", function() {
            document.body.classList.remove("preload")
        }), $(function() {
            var e = ($(".TopicForm-button--preview")[0], new p["default"]($("[data-forum]")), $("[data-topic-post-form]"), $("[data-topic-post]"));
            new f["default"]($(".Topic, .Section--secondary"));
            FastClick.attach(document.body), e.each(function(e, t) {
                return new m["default"](t)
            }), $(document).on("mousemove", function() {
                $('[data-toggle="tooltip"]').tooltip({
                    constraints: [{
                        to: "window",
                        attachment: "together"
                    }]
                })
            }), $("[data-hamburger-close]").on("click", function() {
                $(".nav-mobile-menu-wrap.left").removeClass("out")
            }), $("[data-collapse-category]").click(function() {
                $(this).toggleClass("expanded"), $(this).next().toggleClass("isCollapsed")
            });
            var t = $("#search-input").attr("value"),
                r = '<span class="Highlighted-keyword">' + t + "</span>",
                o = new RegExp(t, "gi");
            $(".Post-content").find(".Post-body--postContent, .Post-body--topicTitle, .Post-body--forumName").each(function() {
                $(this).html(function(e, t) {
                    return t.replace(o, r)
                })
            });
            var a = 0;
            $(window).scroll(function(e) {
                var t = $(this).scrollTop(),
                    r = $(".nav-mobile-menubar").outerHeight();
                t > a && t > r ? $(".nav-mobile-menubar, #nav-client-bar").addClass("scrollDown") : $(".nav-mobile-menubar, #nav-client-bar").removeClass("scrollDown"), a = t
            }), $(".Search-forum-dropdown").on("change", function() {
                var e = $(this).val();
                $("[data-search-forum]").val(e)
            });
            var i = location.search.substr(1).split("&"),
                n = {},
                s = [];
            for(var u in i) s = i[u].split("="), n[s[0]] = s[1];
            $("option[value=" + n.forum + "]").attr("selected", "selected"), $("[data-search-forum]").val(n.forum), $("#toggle-search-field").on("click", function() {
                $("#forum-search-form").toggleClass("is-active").find("input").focus(), $("#toggle-search-field").toggleClass("is-active")
            }), $("#post-countdown").length > 0 && A.showCountDown(), $("body").on("submit", "form", function() {
                $(window).off("beforeunload")
            }), T["default"].initialize(Core.projectUrl + "/" + Core.language + "/" + Core.community), b["default"].initialize(Core.projectUrl + "/" + Core.language + "/" + Core.community)
        });
        var A = function() {
            function e() {
                a(this, e)
            }
            return i(e, null, [{
                key: "showCountDown",
                value: function() {
                    var t = $("#post-countdown"),
                        r = 1e3 * t.data("time-left");
                    window.setTimeout(function() {
                        e.updateTimer("#post-countdown", ".time-left-display", r)
                    }, 1e3)
                }
            }, {
                key: "updateTimer",
                value: function(t, r, o) {
                    var a = $(t);
                    if(o > 0) {
                        var o = o - 1e3;
                        $(r, a).html("" + (Math.ceil(o / 1e3) + 1)), window.setTimeout(function() {
                            e.updateTimer(t, r, o)
                        }, 1e3)
                    } else {
                        var i = $("[data-post-form]"),
                            n = $("#post-countdown"),
                            s = $("#submit-button");
                        n.length > 0 && (i.removeClass("timer-active"), s.removeAttr("disabled"))
                    }
                }
            }]), e
        }()
    }, {
        "./bml.js": 2,
        "./components/AvatarSelect": 3,
        "./components/BmlToolbar": 4,
        "./components/CharacterSelect": 5,
        "./components/Dropdown": 6,
        "./components/Forum": 7,
        "./components/Tooltip": 8,
        "./components/Topic": 9,
        "./components/TopicPost": 10,
        "./components/Util": 11,
        "./topic-submission": 13
    }],
    13: [function(e, t, r) {
        "use strict"
    }, {}]
}, {}, [12]);