<!DOCTYPE html>
<html>

<head>
    <title> STUDENT RESULTS RATING</title>
    <!-- Unicode Vietnamese -->
    <meta charset="UTF-8">
    <meta name="author" content=" trendemy.com" />
    <!-- css definition file -->
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <h2> CLASSIFICATION OF STUDENT RESULTS</h2>
        <!-- Form to send processing results -->
        <!-- action is the landing page, the # value is sent to the current page itself.
The method is post. -->
        <form action="#" method="post">
            <!-- Mathematics -->
            <div class="row">
                <div class="lbltitle">
                    <label> Math scores </label>
                </div>
                <div class="lblinput">
                    <!-- name="math" is the variable name sent to the server, isset($_POST['math']) check if the variable is defined or not -->
                    <input type="number" name="math" value="<?php echo isset ($_POST['math']) ? $_POST['math'] : ""; ?>"
                        max="10" min="0" />
                </div>
            </div>
            <!-- Physics -->
            <div class="row">
                <div class="lbltitle">
                    <label> Physics scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="physics"
                        value="<?php echo isset ($_POST['physics']) ? $_POST['physics'] : ""; ?>" max="10" min="0" />
                </div>
            </div>
            <!-- Chemistry -->
            <div class="row">
                <div class="lbltitle">
                    <label> Chemistry scores</label>
                </div>
                <div class="lblinput">
                    <input type="number" name="chemistry"
                        value="<?php echo isset ($_POST['chemistry']) ? $_POST['chemistry'] : ""; ?>" max="10"
                        min="0" />
                </div>
            </div>

            <div class="row">
                <div class="lbltitle">
                    <label>Select an area</label>
                </div>
                <div class="lblinput">
                    <select name="area">
                        <option value="0" <?php echo isset ($_POST['area']) && $_POST['area'] == 0 ? "selected" : "" ?>>
                            Area 0 </option>
                        <option value="1" <?php echo isset ($_POST['area']) && $_POST['area'] == 1 ? "selected" : "" ?>>
                            Area 1 </option>
                        <option value="2" <?php echo isset ($_POST['area']) && $_POST['area'] == 2 ? "selected" : "" ?>>
                            Area 2 </option>
                        <option value="3" <?php echo isset ($_POST['area']) && $_POST['area'] == 3 ? "selected" : "" ?>>
                            Area 3 </option>
                        <option value="4" <?php echo isset ($_POST['area']) && $_POST['area'] == 4 ? "selected" : "" ?>>
                            Area 4 </option>
                        <option value="5" <?php echo isset ($_POST['area']) && $_POST['area'] == 5 ? "selected" : "" ?>>
                            Area 5 </option>
                    </select>
                </div>
            </div>
            <!-- Form send button, command button to send results -->
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Ratings" />
                </div>
            </div>
        </form>
    </div>
    <!-- Display results -->
    <div class="result">
        <h2>Rating results</h2>
        <div class="row">
            <div class="lbltitle">
                <label>Total points</label>
            </div>
            <div class="lbloutput">
                <?php echo isset ($_POST['btnsubmit']) ? $_POST['math'] + $_POST['physics'] + $_POST['chemistry'] : ""; ?>

            </div>
        </div>
    </div>

    <!-- RATING -->
    <div class="row">
        <div class="lbltitle">
            <label>Rating</label>
        </div>
        <div class="lbloutput">
            <?php
            if (isset ($_POST['btnsubmit'])) {
                $totalpoints = $_POST['math'] + $_POST['physics'] + $_POST['chemistry'];
                if ($totalpoints >= 24)
                    echo "Very Good";
                elseif ($totalpoints >= 21)
                    echo "Good";
                elseif ($totalpoints >= 15)
                    echo "Average";
                else
                    echo "Weak";
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="lbltitle">
            <label> Priority points </label>
        </div>
        <div class="lbloutput">
            <?php
            if (isset ($_POST['btnsubmit'])) {
                $priority_points = $_POST['area'];
                switch ($priority_points) {
                    case 0:
                        echo "0";
                        break;
                    case 1:
                        echo "1";
                        break;
                    case 2:
                        echo "2";
                        break;
                    case 3:
                        echo "3";
                        break;
                    case 4:
                        echo "4";
                        break;
                    case 5:
                        echo "5";
                        break;
                    default:
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>