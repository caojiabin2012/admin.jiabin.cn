<?php
use Common\Utils ;
?>
    <?php include(dirname(dirname(__DIR__)).'/header.php');?>
    <style>
        .titcolor{ background-color:#f5f5f5;}
    </style>

    <div class="container">
        <?php include(dirname(dirname(__DIR__)).'/navbar.php');?>
        <?php $active = 'asciilist'; include(__DIR__.'/tablist.php');?>
       

        <br/>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            在线Ascii码对照表：Ascii码对照表，Ascii码转换器，字符编码Ascii转换 <code>窍门：Ctrl+F 快速查找 Ascii码 及 控制字符</code>
        </div>

        <div class="panel panel-success">
            <table class="table table-bordered table-hover">
                <tbody>
                <tr>
                    <th class="titcolor">
                        ASCII值
                    </th>
                    <th>
                        控制字符
                    </th>
                    <th class="titcolor">
                        ASCII值
                    </th>
                    <th>
                        控制字符
                    </th>
                    <th class="titcolor">
                        ASCII值
                    </th>
                    <th>
                        控制字符
                    </th>
                    <th class="titcolor">
                        ASCII值
                    </th>
                    <th>
                        控制字符
                    </th>
                </tr>
                <tr>
                    <td class="titcolor">
                        0
                    </td>
                    <td>
                        NUT
                    </td>
                    <td class="titcolor">
                        32
                    </td>
                    <td>
                        (space)
                    </td>
                    <td class="titcolor">
                        64
                    </td>
                    <td>
                        @
                    </td>
                    <td class="titcolor">
                        96
                    </td>
                    <td>
                        、
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        1
                    </td>
                    <td>
                        SOH
                    </td>
                    <td class="titcolor">
                        33
                    </td>
                    <td>
                        !
                    </td>
                    <td class="titcolor">
                        65
                    </td>
                    <td>
                        A
                    </td>
                    <td class="titcolor">
                        97
                    </td>
                    <td>
                        a
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        2
                    </td>
                    <td>
                        STX
                    </td>
                    <td class="titcolor">
                        34
                    </td>
                    <td>
                        "
                    </td>
                    <td class="titcolor">
                        66
                    </td>
                    <td>
                        B
                    </td>
                    <td class="titcolor">
                        98
                    </td>
                    <td>
                        b
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        3
                    </td>
                    <td>
                        ETX
                    </td>
                    <td class="titcolor">
                        35
                    </td>
                    <td>
                        #
                    </td>
                    <td class="titcolor">
                        67
                    </td>
                    <td>
                        C
                    </td>
                    <td class="titcolor">
                        99
                    </td>
                    <td>
                        c
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        4
                    </td>
                    <td>
                        EOT
                    </td>
                    <td class="titcolor">
                        36
                    </td>
                    <td>
                        $
                    </td>
                    <td class="titcolor">
                        68
                    </td>
                    <td>
                        D
                    </td>
                    <td class="titcolor">
                        100
                    </td>
                    <td>
                        d
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        5
                    </td>
                    <td>
                        ENQ
                    </td>
                    <td class="titcolor">
                        37
                    </td>
                    <td>
                        %
                    </td>
                    <td class="titcolor">
                        69
                    </td>
                    <td>
                        E
                    </td>
                    <td class="titcolor">
                        101
                    </td>
                    <td>
                        e
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        6
                    </td>
                    <td>
                        ACK
                    </td>
                    <td class="titcolor">
                        38
                    </td>
                    <td>
                        &amp;
                    </td>
                    <td class="titcolor">
                        70
                    </td>
                    <td>
                        F
                    </td>
                    <td class="titcolor">
                        102
                    </td>
                    <td>
                        f
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        7
                    </td>
                    <td>
                        BEL
                    </td>
                    <td class="titcolor">
                        39
                    </td>
                    <td>
                        ,
                    </td>
                    <td class="titcolor">
                        71
                    </td>
                    <td>
                        G
                    </td>
                    <td class="titcolor">
                        103
                    </td>
                    <td>
                        g
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        8
                    </td>
                    <td>
                        BS
                    </td>
                    <td class="titcolor">
                        40
                    </td>
                    <td>
                        (
                    </td>
                    <td class="titcolor">
                        72
                    </td>
                    <td>
                        H
                    </td>
                    <td class="titcolor">
                        104
                    </td>
                    <td>
                        h
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        9
                    </td>
                    <td>
                        HT
                    </td>
                    <td class="titcolor">
                        41
                    </td>
                    <td>
                        )
                    </td>
                    <td class="titcolor">
                        73
                    </td>
                    <td>
                        I
                    </td>
                    <td class="titcolor">
                        105
                    </td>
                    <td>
                        i
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        10
                    </td>
                    <td>
                        LF
                    </td>
                    <td class="titcolor">
                        42
                    </td>
                    <td>
                        *
                    </td>
                    <td class="titcolor">
                        74
                    </td>
                    <td>
                        J
                    </td>
                    <td class="titcolor">
                        106
                    </td>
                    <td>
                        j
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        11
                    </td>
                    <td>
                        VT
                    </td>
                    <td class="titcolor">
                        43
                    </td>
                    <td>
                        +
                    </td>
                    <td class="titcolor">
                        75
                    </td>
                    <td>
                        K
                    </td>
                    <td class="titcolor">
                        107
                    </td>
                    <td>
                        k
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        12
                    </td>
                    <td>
                        FF
                    </td>
                    <td class="titcolor">
                        44
                    </td>
                    <td>
                        ,
                    </td>
                    <td class="titcolor">
                        76
                    </td>
                    <td>
                        L
                    </td>
                    <td class="titcolor">
                        108
                    </td>
                    <td>
                        l
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        13
                    </td>
                    <td>
                        CR
                    </td>
                    <td class="titcolor">
                        45
                    </td>
                    <td>
                        -
                    </td>
                    <td class="titcolor">
                        77
                    </td>
                    <td>
                        M
                    </td>
                    <td class="titcolor">
                        109
                    </td>
                    <td>
                        m
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        14
                    </td>
                    <td>
                        SO
                    </td>
                    <td class="titcolor">
                        46
                    </td>
                    <td>
                        .
                    </td>
                    <td class="titcolor">
                        78
                    </td>
                    <td>
                        N
                    </td>
                    <td class="titcolor">
                        110
                    </td>
                    <td>
                        n
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        15
                    </td>
                    <td>
                        SI
                    </td>
                    <td class="titcolor">
                        47
                    </td>
                    <td>
                        /
                    </td>
                    <td class="titcolor">
                        79
                    </td>
                    <td>
                        O
                    </td>
                    <td class="titcolor">
                        111
                    </td>
                    <td>
                        o
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        16
                    </td>
                    <td>
                        DLE
                    </td>
                    <td class="titcolor">
                        48
                    </td>
                    <td>
                        0
                    </td>
                    <td class="titcolor">
                        80
                    </td>
                    <td>
                        P
                    </td>
                    <td class="titcolor">
                        112
                    </td>
                    <td>
                        p
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        17
                    </td>
                    <td>
                        DCI
                    </td>
                    <td class="titcolor">
                        49
                    </td>
                    <td>
                        1
                    </td>
                    <td class="titcolor">
                        81
                    </td>
                    <td>
                        Q
                    </td>
                    <td class="titcolor">
                        113
                    </td>
                    <td>
                        q
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        18
                    </td>
                    <td>
                        DC2
                    </td>
                    <td class="titcolor">
                        50
                    </td>
                    <td>
                        2
                    </td>
                    <td class="titcolor">
                        82
                    </td>
                    <td>
                        R
                    </td>
                    <td class="titcolor">
                        114
                    </td>
                    <td>
                        r
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        19
                    </td>
                    <td>
                        DC3
                    </td>
                    <td class="titcolor">
                        51
                    </td>
                    <td>
                        3
                    </td>
                    <td class="titcolor">
                        83
                    </td>
                    <td>
                        S
                    </td>
                    <td class="titcolor">
                        115
                    </td>
                    <td>
                        s
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        20
                    </td>
                    <td>
                        DC4
                    </td>
                    <td class="titcolor">
                        52
                    </td>
                    <td>
                        4
                    </td>
                    <td class="titcolor">
                        84
                    </td>
                    <td>
                        T
                    </td>
                    <td class="titcolor">
                        116
                    </td>
                    <td>
                        t
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        21
                    </td>
                    <td>
                        NAK
                    </td>
                    <td class="titcolor">
                        53
                    </td>
                    <td>
                        5
                    </td>
                    <td class="titcolor">
                        85
                    </td>
                    <td>
                        U
                    </td>
                    <td class="titcolor">
                        117
                    </td>
                    <td>
                        u
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        22
                    </td>
                    <td>
                        SYN
                    </td>
                    <td class="titcolor">
                        54
                    </td>
                    <td>
                        6
                    </td>
                    <td class="titcolor">
                        86
                    </td>
                    <td>
                        V
                    </td>
                    <td class="titcolor">
                        118
                    </td>
                    <td>
                        v
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        23
                    </td>
                    <td>
                        TB
                    </td>
                    <td class="titcolor">
                        55
                    </td>
                    <td>
                        7
                    </td>
                    <td class="titcolor">
                        87
                    </td>
                    <td>
                        W
                    </td>
                    <td class="titcolor">
                        119
                    </td>
                    <td>
                        w
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        24
                    </td>
                    <td>
                        CAN
                    </td>
                    <td class="titcolor">
                        56
                    </td>
                    <td>
                        8
                    </td>
                    <td class="titcolor">
                        88
                    </td>
                    <td>
                        X
                    </td>
                    <td class="titcolor">
                        120
                    </td>
                    <td>
                        x
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        25
                    </td>
                    <td>
                        EM
                    </td>
                    <td class="titcolor">
                        57
                    </td>
                    <td>
                        9
                    </td>
                    <td class="titcolor">
                        89
                    </td>
                    <td>
                        Y
                    </td>
                    <td class="titcolor">
                        121
                    </td>
                    <td>
                        y
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        26
                    </td>
                    <td>
                        SUB
                    </td>
                    <td class="titcolor">
                        58
                    </td>
                    <td>
                        :
                    </td>
                    <td class="titcolor">
                        90
                    </td>
                    <td>
                        Z
                    </td>
                    <td class="titcolor">
                        122
                    </td>
                    <td>
                        z
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        27
                    </td>
                    <td>
                        ESC
                    </td>
                    <td class="titcolor">
                        59
                    </td>
                    <td>
                        ;
                    </td>
                    <td class="titcolor">
                        91
                    </td>
                    <td>
                        [
                    </td>
                    <td class="titcolor">
                        123
                    </td>
                    <td>
                        {
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        28
                    </td>
                    <td>
                        FS
                    </td>
                    <td class="titcolor">
                        60
                    </td>
                    <td>
                        &lt;
                    </td>
                    <td class="titcolor">
                        92
                    </td>
                    <td>
                        /
                    </td>
                    <td class="titcolor">
                        124
                    </td>
                    <td>
                        |
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        29
                    </td>
                    <td>
                        GS
                    </td>
                    <td class="titcolor">
                        61
                    </td>
                    <td>
                        =
                    </td>
                    <td class="titcolor">
                        93
                    </td>
                    <td>
                        ]
                    </td>
                    <td class="titcolor">
                        125
                    </td>
                    <td>
                        }
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        30
                    </td>
                    <td>
                        RS
                    </td>
                    <td class="titcolor">
                        62
                    </td>
                    <td>
                        &gt;
                    </td>
                    <td class="titcolor">
                        94
                    </td>
                    <td>
                        ^
                    </td>
                    <td class="titcolor">
                        126
                    </td>
                    <td>
                        `
                    </td>
                </tr>
                <tr>
                    <td class="titcolor">
                        31
                    </td>
                    <td>
                        US
                    </td>
                    <td class="titcolor">
                        63
                    </td>
                    <td>
                        ?
                    </td>
                    <td class="titcolor">
                        95
                    </td>
                    <td>
                        _
                    </td>
                    <td class="titcolor">
                        127
                    </td>
                    <td>
                        DEL
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
<?php include(dirname(dirname(__DIR__)).'/footer.php');?>