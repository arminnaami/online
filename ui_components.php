<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Maisonnette</title>
	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css"/>
    <link type="text/css" href="css/little-fox.css" rel="stylesheet"> 
  </head>
  <body>
	<?php include("header_top.php");?>
	<div class="mai-wrapper">
	<?php include("header.php");?>
	  <div class="main-content container">
        <!--Basic forms-->
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Basic Form
                <span class="panel-subtitle">This is the default bootstrap form layout
                </span>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group mt-1">
                    <label for="emailExample1">Email address
                    </label>
                    <input id="emailExample1" type="email" placeholder="Enter email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password
                    </label>
                    <input type="password" placeholder="Enter password" class="form-control">
                  </div>
                  <div class="row pt-0 pt-0 pt-lg-5">
                    <div class="col-lg-6 pb-4 pb-lg-0">
                      <label class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Remember me
                        </span>
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Submit
                        </button>
                        <button class="btn btn-space btn-secondary">Cancel
                        </button>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Horizontal Form
                <span class="panel-subtitle">This is the horizontal bootstrap layout
                </span>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group row mt-4">
                    <label for="inputEmail3" class="col-3 col-lg-2 col-form-label">Email
                    </label>
                    <div class="col-9 col-lg-10">
                      <input id="inputEmail3" type="email" placeholder="Enter email" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-3 col-lg-2 col-form-label">Password
                    </label>
                    <div class="col-9 col-lg-10">
                      <input id="inputPassword3" type="password" placeholder="Enter password" class="form-control">
                    </div>
                  </div>
                  <div class="row pt-0 pt-0 pt-lg-5">
                    <div class="col-lg-6 pb-4 pb-lg-0">
                      <label class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Remember me
                        </span>
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Register
                        </button>
                        <button class="btn btn-space btn-secondary">Cancel
                        </button>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Basic Elements-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Basic Elements
                <span class="panel-subtitle">These are the basic bootstrap form elements
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Text
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Password
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="password" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Placeholder Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" placeholder="Placeholder text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Disabled Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" disabled="disabled" placeholder="Disabled input text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Readonly Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Textarea
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <textarea class="form-control">
                      </textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Date Picker-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Bootstrap Datepicker
                <span class="panel-subtitle">These are the basic bootstrap form elements
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Default
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker1" type="text" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Today Highlighted
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker2" type="text" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Month View
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker3" type="text" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Year View
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker4" type="text" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Decade View
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker5" type="text" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Centuries View
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker6" type="text" class="form-control datepicker">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Today Button
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input id="datepicker7" type="text" class="form-control datepicker">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Input File-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Input File
                <span class="panel-subtitle">These are the input file options
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Button File Input
                    </label>
                    <div class="col-12 col-sm-6">
                      <input type="file" name="file-1" id="file-1" data-multiple-caption="{count} files selected" multiple class="inputfile">
                      <label for="file-1" class="btn btn-secondary"> 
                        <i class="icon s7-upload">
                        </i>
                        <span>Browse files...
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Custom Button File Input
                    </label>
                    <div class="col-12 col-sm-6">
                      <input type="file" name="file-2" id="file-2" data-multiple-caption="{count} files selected" multiple class="inputfile">
                      <label for="file-2" class="btn btn-primary"> 
                        <i class="icon s7-upload">
                        </i>
                        <span>Browse files...
                        </span>
                      </label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Sizing-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Input Sizing
                <span class="panel-subtitle">These are the different form control component sizes
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Large
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" placeholder="Large input" class="form-control form-control-lg">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Default
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" placeholder="Default input" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Small
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" placeholder="Small input" class="form-control form-control-sm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Extra Small
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                      <input type="text" placeholder="Extra small input" class="form-control form-control-xs">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Select & Option Elements-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Select & Option Elements
                <span class="panel-subtitle">Advanced custom radio & checkboxes components with pure css
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row mt-3">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Icon Radio
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="mai-radio-icon form-check form-check-inline">
                        <label class="custom-control custom-radio custom-radio-icon inline">
                          <input id="radioIcon1" type="radio" name="radio-icon" checked="" class="custom-control-input">
                          <span class="custom-control-indicator">
                            <span class="custom-control-description s7-user-female">
                            </span>
                          </span>
                        </label>
                        <label class="custom-control custom-radio custom-radio-icon inline">
                          <input id="radioIcon2" type="radio" name="radio-icon" class="custom-control-input">
                          <span class="custom-control-indicator">
                            <span class="custom-control-description s7-user">
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="custom-controls-stacked mt-2">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Option 1
                          </span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Option 2
                          </span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Option 3
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Checkbox
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-2">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" checked="" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Option 1
                        </span>
                      </label>
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Option 2
                        </span>
                      </label>
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Option 3
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-2">
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" checked="" class="custom-control-input">
                        <span class="custom-control-indicator custom-control-color">
                        </span>
                        <span class="custom-control-description">Option 1
                        </span>
                      </label>
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator custom-control-color">
                        </span>
                        <span class="custom-control-description">Option 2
                        </span>
                      </label>
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator custom-control-color">
                        </span>
                        <span class="custom-control-description">Option 3
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Radio
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="custom-controls-stacked mt-2">
                        <label class="custom-control custom-radio">
                          <input id="radio1stacked" type="radio" name="radio-stacked" checked="" class="custom-control-input">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Option 1
                          </span>
                        </label>
                        <label class="custom-control custom-radio">
                          <input id="radio2stacked" type="radio" name="radio-stacked" class="custom-control-input">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Option 2
                          </span>
                        </label>
                        <label class="custom-control custom-radio">
                          <input id="radio3stacked" type="radio" name="radio-stacked" class="custom-control-input">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Option 3
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Radio
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-2">
                      <label class="custom-control custom-radio">
                        <input type="radio" name="radio-inline" checked="" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Option 1
                        </span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input type="radio" name="radio-inline" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Option 2
                        </span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input type="radio" name="radio-inline" class="custom-control-input">
                        <span class="custom-control-indicator">
                        </span>
                        <span class="custom-control-description">Option 3
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <label class="custom-control custom-radio">
                        <input type="radio" name="radio-color" checked="" class="custom-control-input">
                        <span class="custom-control-indicator custom-control-color">
                        </span>
                        <span class="custom-control-description">Option 1
                        </span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input type="radio" name="radio-color" class="custom-control-input">
                        <span class="custom-control-indicator custom-control-color">
                        </span>
                        <span class="custom-control-description">Option 2
                        </span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input type="radio" name="radio-color" class="custom-control-input">
                        <span class="custom-control-indicator custom-control-color">
                        </span>
                        <span class="custom-control-description">Option 3
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic Select
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select class="form-control custom-select">
                        <option value="1" selected>1
                        </option>
                        <option value="2">2
                        </option>
                        <option value="3">3
                        </option>
                        <option value="4">4
                        </option>
                        <option value="5">5
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Multiple Select
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select multiple="" class="form-control">
                        <option value="1">Option 1
                        </option>
                        <option value="2">Option 2
                        </option>
                        <option value="3">Option 3
                        </option>
                        <option value="4">Option 4
                        </option>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Validation States-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Validation States
                <span class="panel-subtitle">Default bootstrap validation states
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input with Success
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required class="form-control is-valid">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input with Error
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required class="form-control is-invalid">
                    </div>
                  </div>
                  <div class="panel-divider">
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 control-label col-form-label text-sm-right">Input with Success
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required class="form-control form-control-success is-valid">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 control-label col-form-label text-sm-right">Input with Error
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" required class="form-control form-control-danger is-invalid">
                    </div>
                  </div>
                  <div class="panel-divider">
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                      <div class="custom-controls-stacked form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input is-valid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Success
                          </span>
                        </label>
                      </div>
                      <div class="custom-controls-stacked form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input is-invalid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Danger
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Checkbox
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                      <div class="form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input is-valid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Success
                          </span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input is-invalid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Danger
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                      <div class="form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input is-valid">
                          <span class="custom-control-indicator custom-control-color">
                          </span>
                          <span class="custom-control-description">Success
                          </span>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input is-invalid">
                          <span class="custom-control-indicator custom-control-color">
                          </span>
                          <span class="custom-control-description">Danger
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="panel-divider">
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Radio
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                      <div class="custom-controls-stacked form-group">
                        <label class="custom-control custom-radio">
                          <input type="radio" checked name="radioStateColor" class="custom-control-input is-valid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Success
                          </span>
                        </label>
                      </div>
                      <div class="custom-controls-stacked form-group">
                        <label class="custom-control custom-radio">
                          <input type="radio" name="radioStateColor" class="custom-control-input is-invalid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Danger
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Radio
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                      <div class="form-group">
                        <label class="custom-control custom-radio">
                          <input type="radio" checked name="radioStateColor2" class="custom-control-input is-valid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Success
                          </span>
                        </label>
                        <label class="custom-control custom-radio">
                          <input type="radio" name="radioStateColor2" class="custom-control-input is-invalid">
                          <span class="custom-control-indicator">
                          </span>
                          <span class="custom-control-description">Danger
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                      <div class="form-group">
                        <label class="custom-control custom-radio">
                          <input type="radio" checked name="radioStateColor3" class="custom-control-input is-valid">
                          <span class="custom-control-indicator custom-control-color">
                          </span>
                          <span class="custom-control-description">Success
                          </span>
                        </label>
                        <label class="custom-control custom-radio">
                          <input type="radio" name="radioStateColor3" class="custom-control-input is-invalid">
                          <span class="custom-control-indicator custom-control-color">
                          </span>
                          <span class="custom-control-description">Danger
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Input Groups-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Input Groups
                <span class="panel-subtitle">Bootstrap input groups components
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Text
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="input-group mb-2">
                        <span class="input-group-addon">@
                        </span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                      <div class="input-group mb-2">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00
                        </span>
                      </div>
                      <div class="input-group mb-2">
                        <span class="input-group-addon">$
                        </span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Sizing
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="input-group input-group-lg mb-2">
                        <span class="input-group-addon">@
                        </span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                      <div class="input-group mb-2">
                        <span class="input-group-addon">@
                        </span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                      <div class="input-group input-group-sm mb-2">
                        <span class="input-group-addon">@
                        </span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox & Radio
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="input-group mb-2">
                        <div class="input-group-addon">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator">
                            </span>
                          </label>
                        </div>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group mb-2">
                        <div class="input-group-addon">
                          <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input">
                            <span class="custom-control-indicator">
                            </span>
                          </label>
                        </div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Button Addons
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <div class="input-group mb-2">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-primary">Go!
                          </button>
                        </span>
                      </div>
                      <div class="input-group mb-2">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action
                            <span class="icon-dropdown s7-angle-down">
                            </span>
                          </button>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action
                            </a>
                            <a href="#" class="dropdown-item">Another action
                            </a>
                            <a href="#" class="dropdown-item">Something else here
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a href="#" class="dropdown-item">Separated link
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-2">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button tabindex="-1" type="button" class="btn btn-primary">Action
                          </button>
                          <button tabindex="-1" data-toggle="dropdown" type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split">
                            <span class="icon-dropdown s7-angle-down">
                            </span>
                            <span class="sr-only">Toggle Dropdown
                            </span>
                          </button>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action
                            </a>
                            <a href="#" class="dropdown-item">Another action
                            </a>
                            <a href="#" class="dropdown-item">Something else here
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a href="#" class="dropdown-item">Separated link
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Swtich Component-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Switch Component
                <span class="panel-subtitle">Custom switch component using only css
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Sizes
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 pt-2">
                      <div class="switch-button switch-button-xs">
                        <input type="checkbox" checked="" name="swt1" id="swt1">
                        <span>
                          <label for="swt1">
                          </label>
                        </span>
                      </div>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="swt2" id="swt2">
                        <span>
                          <label for="swt2">
                          </label>
                        </span>
                      </div>
                      <div class="switch-button">
                        <input type="checkbox" checked="" name="swt3" id="swt3">
                        <span>
                          <label for="swt3">
                          </label>
                        </span>
                      </div>
                      <div class="switch-button switch-button-lg">
                        <input type="checkbox" checked="" name="swt4" id="swt4">
                        <span>
                          <label for="swt4">
                          </label>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Success
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 pt-2">
                      <div class="switch-button switch-button-success">
                        <input type="checkbox" checked="" name="swt5" id="swt5">
                        <span>
                          <label for="swt5">
                          </label>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Warning
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 pt-2">
                      <div class="switch-button switch-button-warning">
                        <input type="checkbox" checked="" name="swt6" id="swt6">
                        <span>
                          <label for="swt6">
                          </label>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Danger
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 pt-2">
                      <div class="switch-button switch-button-danger">
                        <input type="checkbox" checked="" name="swt7" id="swt7">
                        <span>
                          <label for="swt7">
                          </label>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Yes/No Labels
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6 pt-2">
                      <div class="switch-button switch-button-yesno">
                        <input type="checkbox" checked="" name="swt8" id="swt8">
                        <span>
                          <label for="swt8">
                          </label>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Select2 & Slider-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-divider">Advanced Controls
                <span class="panel-subtitle">Select2 & Bootstrap slider plugins
                </span>
              </div>
              <div class="panel-body pl-sm-5">
                <form>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Select2
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select class="select2">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska
                          </option>
                          <option value="HI">Hawaii
                          </option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA">California
                          </option>
                          <option value="NV">Nevada
                          </option>
                          <option value="OR">Oregon
                          </option>
                          <option value="WA">Washington
                          </option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                          <option value="AZ">Arizona
                          </option>
                          <option value="CO">Colorado
                          </option>
                          <option value="ID">Idaho
                          </option>
                          <option value="MT">Montana
                          </option>
                          <option value="NE">Nebraska
                          </option>
                          <option value="NM">New Mexico
                          </option>
                          <option value="ND">North Dakota
                          </option>
                          <option value="UT">Utah
                          </option>
                          <option value="WY">Wyoming
                          </option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                          <option value="AL">Alabama
                          </option>
                          <option value="AR">Arkansas
                          </option>
                          <option value="IL">Illinois
                          </option>
                          <option value="IA">Iowa
                          </option>
                          <option value="KS">Kansas
                          </option>
                          <option value="KY">Kentucky
                          </option>
                          <option value="LA">Louisiana
                          </option>
                          <option value="MN">Minnesota
                          </option>
                          <option value="MS">Mississippi
                          </option>
                          <option value="MO">Missouri
                          </option>
                          <option value="OK">Oklahoma
                          </option>
                          <option value="SD">South Dakota
                          </option>
                          <option value="TX">Texas
                          </option>
                          <option value="TN">Tennessee
                          </option>
                          <option value="WI">Wisconsin
                          </option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                          <option value="CT">Connecticut
                          </option>
                          <option value="DE">Delaware
                          </option>
                          <option value="FL">Florida
                          </option>
                          <option value="GA">Georgia
                          </option>
                          <option value="IN">Indiana
                          </option>
                          <option value="ME">Maine
                          </option>
                          <option value="MD">Maryland
                          </option>
                          <option value="MA">Massachusetts
                          </option>
                          <option value="MI">Michigan
                          </option>
                          <option value="NH">New Hampshire
                          </option>
                          <option value="NJ">New Jersey
                          </option>
                          <option value="NY">New York
                          </option>
                          <option value="NC">North Carolina
                          </option>
                          <option value="OH">Ohio
                          </option>
                          <option value="PA">Pennsylvania
                          </option>
                          <option value="RI">Rhode Island
                          </option>
                          <option value="SC">South Carolina
                          </option>
                          <option value="VT">Vermont
                          </option>
                          <option value="VA">Virginia
                          </option>
                          <option value="WV">West Virginia
                          </option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">MultiTag Input
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select multiple="" class="tags">
                        <option value="1">Green
                        </option>
                        <option value="2">Red
                        </option>
                        <option value="3">Blue
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Multitag from Select
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <select multiple="" class="select2">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska
                          </option>
                          <option value="HI">Hawaii
                          </option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA">California
                          </option>
                          <option value="NV">Nevada
                          </option>
                          <option value="OR">Oregon
                          </option>
                          <option value="WA">Washington
                          </option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                          <option value="AZ">Arizona
                          </option>
                          <option value="CO">Colorado
                          </option>
                          <option value="ID">Idaho
                          </option>
                          <option value="MT">Montana
                          </option>
                          <option value="NE">Nebraska
                          </option>
                          <option value="NM">New Mexico
                          </option>
                          <option value="ND">North Dakota
                          </option>
                          <option value="UT">Utah
                          </option>
                          <option value="WY">Wyoming
                          </option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                          <option value="AL">Alabama
                          </option>
                          <option value="AR">Arkansas
                          </option>
                          <option value="IL">Illinois
                          </option>
                          <option value="IA">Iowa
                          </option>
                          <option value="KS">Kansas
                          </option>
                          <option value="KY">Kentucky
                          </option>
                          <option value="LA">Louisiana
                          </option>
                          <option value="MN">Minnesota
                          </option>
                          <option value="MS">Mississippi
                          </option>
                          <option value="MO">Missouri
                          </option>
                          <option value="OK">Oklahoma
                          </option>
                          <option value="SD">South Dakota
                          </option>
                          <option value="TX">Texas
                          </option>
                          <option value="TN">Tennessee
                          </option>
                          <option value="WI">Wisconsin
                          </option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                          <option value="CT">Connecticut
                          </option>
                          <option value="DE">Delaware
                          </option>
                          <option value="FL">Florida
                          </option>
                          <option value="GA">Georgia
                          </option>
                          <option value="IN">Indiana
                          </option>
                          <option value="ME">Maine
                          </option>
                          <option value="MD">Maryland
                          </option>
                          <option value="MA">Massachusetts
                          </option>
                          <option value="MI">Michigan
                          </option>
                          <option value="NH">New Hampshire
                          </option>
                          <option value="NJ">New Jersey
                          </option>
                          <option value="NY">New York
                          </option>
                          <option value="NC">North Carolina
                          </option>
                          <option value="OH">Ohio
                          </option>
                          <option value="PA">Pennsylvania
                          </option>
                          <option value="RI">Rhode Island
                          </option>
                          <option value="SC">South Carolina
                          </option>
                          <option value="VT">Vermont
                          </option>
                          <option value="VA">Virginia
                          </option>
                          <option value="WV">West Virginia
                          </option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Slider
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" value="" class="bslider form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Slider
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" data-slider-value="[250,450]" data-slider-step="5" data-slider-max="1000" data-slider-min="10" value="" class="bslider form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Vertical Slider
                    </label>
                    <div class="col-12 col-sm-8 col-lg-6">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-2" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/select2.full.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.formElements();
      }
                       );
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      }
    );
    </script>
  </body>
</html>
